<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'sub_title', 'satisfied_customer', 'completion_project', 'experience_team', 'winning_awards'];

    public static function newAbouts($request)
    {
        $abouts = new self();
        self::saveBasicInfo($abouts, $request);
    }

    public static function updateAbouts($request, $abouts)
    {
        self::saveBasicInfo($abouts, $request);
    }

    private static function saveBasicInfo($abouts, $request)
    {
        $abouts->title  = $request->title;
        $abouts->sub_title  = $request->sub_title;
        $abouts->satisfied_customer  = $request->satisfied_customer;
        $abouts->completion_project  = $request->completion_project;
        $abouts->experience_team  = $request->experience_team;
        $abouts->winning_awards  = $request->winning_awards;
        $abouts->save();
    }

    public static function deleteAbouts($abouts)
    {
        $abouts->delete();
    }
}
