<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projeto Entity
 *
 * @property int $cdProj
 * @property int $cdProf
 * @property int $cdCoord
 * @property int $cdAluno
 * @property int|null $cdAluno2
 * @property int|null $cdAluno3
 * @property int|null $cdAluno4
 * @property string $nomeProj
 * @property string|null $descrProj
 * @property \Cake\I18n\FrozenDate|null $dtInicio
 * @property \Cake\I18n\FrozenDate|null $dtFim
 * @property \Cake\I18n\FrozenDate|null $dtApres
 * @property string|null $notaProj
 * @property string|null $statusProj
 */
class Projeto extends Entity
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
        'cdProf' => true,
        'cdCoord' => true,
        'cdAluno' => true,
        'cdAluno2' => true,
        'cdAluno3' => true,
        'cdAluno4' => true,
        'nomeProj' => true,
        'descrProj' => true,
        'dtInicio' => true,
        'dtFim' => true,
        'dtApres' => true,
        'notaProj' => true,
        'statusProj' => true,
    ];
}
