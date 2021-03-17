<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projeto Entity
 *
 * @property int $cdProj
 * @property string $loginProf
 * @property string $loginCoord
 * @property string $loginAluno
 * @property string|null $loginAluno2
 * @property string|null $loginAluno3
 * @property string|null $loginAluno4
 * @property string|null $nomeProj
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
        'loginProf' => true,
        'loginCoord' => true,
        'loginAluno' => true,
        'loginAluno2' => true,
        'loginAluno3' => true,
        'loginAluno4' => true,
        'nomeProj' => true,
        'descrProj' => true,
        'dtInicio' => true,
        'dtFim' => true,
        'dtApres' => true,
        'notaProj' => true,
        'statusProj' => true,
    ];
}
