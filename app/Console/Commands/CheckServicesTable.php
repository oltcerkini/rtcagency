<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CheckServicesTable extends Command
{
    protected $signature = 'services:check';
    protected $description = 'Check services table structure';

    public function handle()
    {
        $this->info('Checking services table...');
        
        if (!Schema::hasTable('services')) {
            $this->error('❌ Services table does not exist!');
            return;
        }
        
        $this->info('✅ Services table exists');
        
        // Get columns
        $columns = DB::select('DESCRIBE services');
        
        $this->table(['Column', 'Type', 'Null', 'Default'], 
            array_map(function($col) {
                return [$col->Field, $col->Type, $col->Null, $col->Default];
            }, $columns)
        );
        
        // Check for required columns
        $required = ['order', 'is_published', 'is_featured'];
        $missing = [];
        
        foreach ($required as $col) {
            if (Schema::hasColumn('services', $col)) {
                $this->info("✅ Column '{$col}' exists");
            } else {
                $this->error("❌ Column '{$col}' is MISSING");
                $missing[] = $col;
            }
        }
        
        if (count($missing) > 0) {
            $this->error("\nMissing columns: " . implode(', ', $missing));
            $this->info("\nRun this SQL to fix:");
            $this->info("php artisan services:fix");
        }
    }
}