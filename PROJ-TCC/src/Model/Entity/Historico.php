<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Historico Entity
 *
 * @property string|null $versaoProj
 * @property string|null $nmArquivo
 * @property \Cake\I18n\FrozenDate|null $dtVersao
 * @property int|null $cdProj
 */
class Historico extends Entity
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
        'versaoProj' => true,
        'nmArquivo' => true,
        'dtVersao' => true,
        'cdProj' => true,
    ];
}
