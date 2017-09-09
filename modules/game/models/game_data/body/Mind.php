<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Mind extends BaseBodyPart
{
    const STATE_RELUCTANT = 'reluctant';
    const STATE_ARROGANT = 'arrogant';
    const STATE_HATEFUL = 'hateful';
    const STATE_RESISTANT = 'resistant';
    const STATE_LACHRYMOSE = 'lachrymose';
    const STATE_SOFT = 'soft';
    const STATE_SERVILE = 'servile';
    const STATE_FRIGHTENED = 'frightened';
    const STATE_OBEDIENT = 'obedient';
    const STATE_BROKEN = 'broken';
    const STATE_DEPRESIVE = 'depresive';
    const STATE_HORNY = 'horny';
    const STATE_HYSTERIC = 'hysteric';
    const STATE_OPTIMISTIC = 'optimistic';
    const STATE_DOCILE = 'docile';

    const STATE_TO_STR = [
        self::STATE_RELUCTANT => 'Насторожена',
        self::STATE_ARROGANT => 'Высокомерна',
        self::STATE_HATEFUL => 'Ненавидит',
        self::STATE_RESISTANT => 'Сопротивляется',
        self::STATE_LACHRYMOSE => 'В слезах',
        self::STATE_SOFT => 'Тихая',
        self::STATE_SERVILE => 'Рабыня',
        self::STATE_FRIGHTENED => 'Напугана',
        self::STATE_OBEDIENT => 'Покорна',
        self::STATE_BROKEN => 'Сломлена',
        self::STATE_DEPRESIVE => 'В депрессии',
        self::STATE_HORNY => 'Возбуждена',
        self::STATE_HYSTERIC => 'В истерике',
        self::STATE_OPTIMISTIC => 'Оптимистична',
        self::STATE_DOCILE => 'Слушается',
    ];

    const STATE_TO_REBEL = [
        self::STATE_RELUCTANT => 1,
        self::STATE_ARROGANT => 2,
        self::STATE_HATEFUL => 4,
        self::STATE_RESISTANT => 3,
        self::STATE_LACHRYMOSE => -1,
        self::STATE_SOFT => 0,
        self::STATE_SERVILE => -1,
        self::STATE_FRIGHTENED => -1,
        self::STATE_OBEDIENT => 0,
        self::STATE_BROKEN => -100,
        self::STATE_DEPRESIVE => -2,
        self::STATE_HORNY => 0,
        self::STATE_HYSTERIC => 3,
        self::STATE_OPTIMISTIC => 0,
        self::STATE_DOCILE => -1,
    ];

    public $value;

    public function serializableParams()
    {
        return [
            'value' => '',
        ];
    }

    public function getStatus()
    {
        return static::STATE_TO_STR[$this->value];
    }
}