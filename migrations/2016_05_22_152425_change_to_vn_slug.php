<?php

//use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) {
//        $schema->getConnection()->table('discussions')->chunk(100, function ($discussions) use ($schema) {
//            foreach ($discussions as $discussion) {
//                $schema->getConnection()->table('discussions')->where('id', $discussion->id)->update([
//                    'slug' => \GaNuongLaChanh\FlarumVnSlug\Utils::genSlug($discussion->title)
//                ]);
//            }
//        });
    },

    'down' => function (Builder $schema) {
//        $schema->getConnection()->table('discussions')->chunk(100, function ($discussions) use ($schema) {
//            foreach ($discussions as $discussion) {
//                $schema->getConnection()->table('discussions')->where('id', $discussion->id)->update([
//                    'slug' => \Flarum\Util\Str::slug($discussion->title)
//                ]);
//            }
//        });
    }
];
