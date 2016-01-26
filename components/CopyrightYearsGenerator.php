<?php
namespace Thewizardplusplus\CopyrightYears\Components;

use RainLab\Blog\Models\Post;
use Db;

class CopyrightYearsGenerator
{
    public static function getStartYear()
    {
        return self::getYear(
            function($query_builder, $timestamp_field) {
                return $query_builder->min($timestamp_field);
            }
        );
    }

    public static function getEndYear()
    {
        return self::getYear(
            function($query_builder, $timestamp_field) {
                return $query_builder->max($timestamp_field);
            }
        );
    }

    private static function getYear($searcher)
    {
        $timestamp = self::findPostTimestamp($searcher);
        return self::extractYear($timestamp);
    }

    private static function findPostTimestamp($searcher)
    {
        $query_builder = Post::where('published', 1)
            ->where('published_at', '<=', Db::raw('NOW()'));
        return $searcher($query_builder, 'published_at');
    }

    private static function extractYear($timestamp)
    {
        return intval(date_create($timestamp)->format('Y'));
    }
}
