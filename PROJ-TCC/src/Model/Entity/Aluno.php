<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $cdAluno
 * @property string $loginAluno
 * @property string $senhaAluno
 * @property int $matAluno
 * @property string $nomeAluno
 * @property string $emailAluno
 * @property int $cdAccount
 */
class Aluno extends Entity
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
        'loginAluno' => true,
        'senhaAluno' => true,
        'matAluno' => true,
        'nomeAluno' => true,
        'emailAluno' => true,
        'cdAccount' => true,
    ];
}
