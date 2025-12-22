<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Task extends Model
{
    protected $fillable = ['text', 'start_date', 'duration', 'progress', 'parent'];
    protected $appends = ["open"];
 
    public function getOpenAttribute(){
        return true;
    }
}