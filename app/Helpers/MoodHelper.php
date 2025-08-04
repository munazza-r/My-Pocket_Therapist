<?php

namespace App\Helpers;

class MoodHelper
{
    public static function getMoodEmoji($moodType)
    {
        $emojiMap = [
            'Happy' => '😊',
            'Calm' => '😌',
            'Neutral' => '😐',
            'Sad' => '😔',
            'Anxious' => '😰',
            'Angry' => '😡'
        ];
        
        return $emojiMap[$moodType] ?? '😐';
    }
} 