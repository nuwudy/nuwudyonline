<?php

namespace App\Observers;

use App\Models\CustomerDocument;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CustomerDocumentObserver
{
    public function saving(CustomerDocument $customerDocument): void
    {
        if ($customerDocument->isDirty('file_path') && $customerDocument->file_path) {
            $path = $customerDocument->file_path;
            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $fullPath = Storage::disk('public')->path($path);
                
                if (file_exists($fullPath)) {
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($fullPath);
                    
                    $newPath = dirname($path) . '/' . pathinfo($path, PATHINFO_FILENAME) . '.webp';
                    $newFullPath = Storage::disk('public')->path($newPath);
                    
                    $image->toWebp(80)->save($newFullPath);
                    
                    // Delete old file
                    Storage::disk('public')->delete($path);
                    
                    // Update model path
                    $customerDocument->file_path = $newPath;
                }
            }
        }
    }
}
