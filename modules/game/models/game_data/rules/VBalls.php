<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class VBalls extends BaseRule
{
    public $name = 'V-шарики';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы приказываете воспитуемой извлечь вагинальные шарики, хорошенько их вымыть и отдать вам. Её возбуждение необходимо контролировать, чтобы оно не становилось помехой в обучении.',
            1 => 'Вы отдадите воспитуемой специальные вагинальные шарики и прикажете постоянно носить их во влагалище чтобы она могла развивать свою чувствительность и влечение.',
        ];
    }
}