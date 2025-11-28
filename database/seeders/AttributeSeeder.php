<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Lunar\Models\Attribute;
use Lunar\Models\AttributeGroup;

class AttributeSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        // Product attribute grubunu bul
        $attributeGroup = AttributeGroup::where('attributable_type', 'product')->first();

        if (!$attributeGroup) {
            return;
        }

        $attributes = $this->getSeedData('attributes');

        DB::transaction(function () use ($attributes, $attributeGroup) {
            foreach ($attributes as $attribute) {
                // Aynı handle'a sahip attribute varsa atla
                if (Attribute::where('handle', $attribute->handle)->exists()) {
                    continue;
                }

                Attribute::create([
                    'attribute_group_id' => $attributeGroup->id,
                    'attribute_type' => $attribute->attribute_type,
                    'handle' => $attribute->handle,
                    'section' => 'main',
                    'type' => $attribute->type,
                    'required' => false,
                    'searchable' => true,
                    'filterable' => false,
                    'system' => false,
                    'position' => $attributeGroup->attributes()->count() + 1,
                    'name' => [
                        'tr' => $attribute->name,
                    ],
                    'description' => [
                        'tr' => $attribute->name,
                    ],
                    'configuration' => (array) $attribute->configuration,
                ]);
            }
        });
    }
}
