<?php 


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Job extends Model {
        
    use HasFactory;
    
    protected $table = 'job_listings'; // reads job_listings Table column

        
    protected $fillable = ['title', 'salary'];
}
