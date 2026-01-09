<?php

declare(strict_types=1);

namespace BhrSdk\Test;

use BhrSdk\ObjectSerializer;
use PHPUnit\Framework\TestCase;

class ObjectSerializerTrainingCategoriesTest extends TestCase {
	public function testDeserializeTrainingCategoriesObjectOfObjectsAsArray(): void {
		$json = '{"20713":{"id":"20713","name":"Client Specific"},"18532":{"id":"18532","name":"Electrical"}}';
		$decoded = json_decode($json);

		$result = ObjectSerializer::deserialize($decoded, '\\stdClass[]', []);

		self::assertIsArray($result);
		self::assertCount(2, $result);
		self::assertContainsOnlyInstancesOf(\stdClass::class, $result);

		self::assertSame('20713', $result[0]->id);
		self::assertSame('Client Specific', $result[0]->name);
	}

	public function testDeserializeEmptyObjectAsEmptyArray(): void {
		$decoded = json_decode('{}');
		$result = ObjectSerializer::deserialize($decoded, '\\stdClass[]', []);
		self::assertIsArray($result);
		self::assertCount(0, $result);
	}
}
