<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coordenador Entity
 *
 * @property int $cdCoord
 * @property string $loginCoord
 * @property string $senhaCoord
 * @property string $nomeCoord
 * @property string|null $emailCoord
 * @property int $cdAccount
 */
class Coordenador extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'loginCoord' => true,
        'senhaCoord' => true,
        'nomeCoord' => true,
        'emailCoord' => true,
        'cdAccount' => true,
    ];
}
