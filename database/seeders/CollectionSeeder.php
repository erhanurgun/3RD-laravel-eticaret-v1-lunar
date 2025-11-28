<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Lunar\FieldTypes\Text;
use Lunar\FieldTypes\TranslatedText;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;

class CollectionSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $collectionGroup = CollectionGroup::first();

        if (!$collectionGroup) {
            return;
        }

        $collections = $this->getSeedData('collections');

        DB::transaction(function () use ($collections, $collectionGroup) {
            foreach ($collections as $collection) {
                Collection::create([
                    'collection_group_id' => $collectionGroup->id,
                    'attribute_data' => [
                        'name' => new TranslatedText([
                            'tr' => new Text($collection->name),
                        ]),
                        'description' => new TranslatedText([
                            'tr' => new Text($collection->description),
                        ]),
                    ],
                ]);
            }
        });
    }
}
