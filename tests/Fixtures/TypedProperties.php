<?php
declare(strict_types=1);

namespace OpenApiFixtures;

use DateTime;
use App;

/**
 * @OA\Schema()
 */
class TypedProperties
{
    /**
     * @OA\Property()
     */
    public string $stringType;

    /**
     * @OA\Property()
     */
    public int $intType;

    /**
     * @OA\Property()
     */
    public ?string $nullableString;

    /**
     * @OA\Property()
     */
    public DateTime $dateTime;

    /**
     * @OA\Property()
     */
    public \DateTimeInterface $qualified;

    /**
     * @OA\Property()
     */
    public \OpenApiFixtures\TypedProperties $namespace;

    /**
     * @OA\Property()
     */
    public TypedProperties $importedNamespace;

    /**
     * @var int
     * @OA\Property()
     */
    public string $nativeTrumpsVar;

    /**
     * @var int
     * @OA\Property(
     *     type="integer",
     * )
     */
    public string $annotationTrumpsNative;

    /**
     * @var string
     * @OA\Property(
     *     type="integer",
     * )
     */
    public string $annotationTrumpsAll;

    /**
     * @OA\Property()
     */
    public $undefined;

    /**
     * @OA\Property(
     *     type="integer",
     * )
     */
    public $onlyAnnotated;

    /**
     * @var int
     * @OA\Property()
     */
    public $onlyVar;

    /**
     * @OA\Property()
     */
    public static $staticUndefined;

    /**
     * @OA\Property()
     */
    public static string $staticString;

    /**
     * @OA\Property()
     */
    public static ?string $staticNullableString;
}
