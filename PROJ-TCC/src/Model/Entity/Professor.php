<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Professor Entity
 *
 * @property string $loginProf
 * @property string $senhaProf
 * @property string|null $nomeProf
 * @property string $emailProf
 * @property string|null $celProf
 * @property int $codAccount
 */
class Professor extends Entity
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
        'senhaProf' => true,
        'nomeProf' => true,
        'emailProf' => true,
        'celProf' => true,
        'codAccount' => true,
    ];
}
