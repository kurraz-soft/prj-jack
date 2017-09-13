<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\text_menu;


use app\modules\game\models\game_data\base\ITextMenu;
use app\modules\game\models\GameMechanics;
use yii\helpers\Url;

class HomeMenu implements ITextMenu
{
    public static function getMenu()
    {
        $character = GameMechanics::getInstance()->gameRegister->character;

        $menu = [];

        $menu[] = [
            'text' => 'Заняться воспитуемой',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/activity.png',
            'children' => static::slaveActivity(),
        ];
        $menu[] = [
            'text' => 'Приказы воспитуемой',
            'url' => Url::to(['slave-orders']),
            'image' => '/assets_game/img/ui_overhaul/slave_assignments.png',
            'children' => static::getSlaveAssignments(),
        ];
        $menu[] = [
            'text' => 'Поручения ассисентке',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            'children' => static::getAssistantAssignments(),
        ];
        $menu[] = [
            'text' => 'Бытовые вопросы',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/domestic_issues.png',
            'children' => static::getDomesticIssues(),
        ];
        $menu[] = [
            'text' => 'Сотворить заклинание',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/cast_spell.png',
            'children' => static::spell(),
        ];
        $menu[] = [
            'text' => 'Выйти из дома',
            'url' => Url::to($character->home->location_route),
            'image' => '/assets_game/img/ui_overhaul/home.png',
        ];
        $menu[] = [
            'text' => 'Закончить день',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/end_day.png',
        ];

        return $menu;
    }

    private static function spell()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Книга заклинаний',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Читать о заклинаниях',
        ];
        $menu[] = [
            'text' => 'Auspex (2 искры)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Позволяет мастеру видеть ауру рабыни или ассистентки',
        ];
        $menu[] = [
            'text' => 'Delikacia (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Вызывает удовольствие у рабыни в соответствии с заслугами, сильно снижает возбуждение',
        ];
        $menu[] = [
            'text' => 'Cruciato (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Причиняет боль рабыне в соответствии с её провинностями',
        ];
        $menu[] = [
            'text' => 'Sententia Veritas (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Если %{apprentice_name}% не имеет заслуг или провинностей, увеличит их уровень при следующем получении',
        ];
        $menu[] = [
            'text' => 'Magna Magnifika (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Усиливает ауру заклинателя в зависимости от его магической силы',
        ];
        $menu[] = [
            'text' => 'Tremendio (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Вселяет ужас в сердце цели',
        ];
        $menu[] = [
            'text' => 'Domini Dictum (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Заставляет цель выполнять все указания заклинателя, если его магическая сила сильнее ауры цели',
        ];
        $menu[] = [
            'text' => 'Adverto Servili (25 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Накладывает магическую нестираемую печать на тело жертвы',
        ];

        return $menu;
    }

    private static function slaveActivity()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Поговорить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'children' => static::slaveActivityTalk(),
        ];
        $menu[] = [
            'text' => 'Заняться сексом',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/sex.png',
            'children' => static::slaveActivitySex(),
        ];
        $menu[] = [
            'text' => 'Провести урок',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/conduct a lesson.png',
        ];
        /*$menu[] = [
            'text' => 'Секс обучение',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/sex education.png',
        ];*/
        $menu[] = [
            'text' => 'Пригласить репетитора',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/invite a tutor.png',
        ];
        $menu[] = [
            'text' => 'Поощрить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/invite a tutor.png',
            'children' => static::slaveReward(),
        ];
        $menu[] = [
            'text' => 'Наказать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/invite a tutor.png',
            'children' => static::slavePunish(),
        ];
        /*$menu[] = [
            'text' => 'Избавиться от нее',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/invite a tutor.png',
        ];*/

        return $menu;
    }

    private static function slaveActivitySex()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Вагинальный секс',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Заняться расслабленным вагинальным сексом с подопечной',
        ];
        $menu[] = [
            'text' => 'Анальный секс',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Заняться расслабленным анальным сексом с подопечной',
        ];
        $menu[] = [
            'text' => 'Оральный секс',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Заняться расслабленным оральным сексом с подопечной',
        ];
        $menu[] = [
            'text' => 'Секс втроём',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Заняться сексом с подопечной и помощницей',
        ];
        $menu[] = [
            'text' => 'Обещать подарок',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Пообещать, что %{apprentice_name}% скоро получит какой-нибудь подарок (5)',
        ];
        $menu[] = [
            'text' => 'Изнасиловать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Изнасиловать рабыню вагинально',
        ];
        $menu[] = [
            'text' => 'Орально изнасиловать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Изнасиловать рабыню орально',
        ];
        $menu[] = [
            'text' => 'Анально изнасиловать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Изнасиловать рабыню анально',
        ];

        return $menu;
    }

    private static function slaveReward()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Моральное поощрение',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Наградить подопечную добрыми словами',
            'children' => static::slaveRewardMoral(),
        ];
        $menu[] = [
            'text' => 'Провести время вместе',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Взять подопечную на свидание в награду за ее хорошее поведение',
            'children' => static::slaveRewardDate(),
        ];
        $menu[] = [
            'text' => 'Дать свободное время',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Дать воспитуемой свободное время за ее хорошее поведение',
            'children' => static::slaveRewardFreeTime(),
        ];
        $menu[] = [
            'text' => 'Эротическое поощрение',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Сделать воспитуемой эротическое поощрение за ее хорошее поведение',
            'children' => static::slaveRewardErotic(),
        ];
        $menu[] = [
            'text' => 'Сделать подарок',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Преподнести воспитуемой подарок за ее хорошее поведение',
            'children' => static::slaveRewardPresent(),
        ];
        $menu[] = [
            'text' => 'Угостить сладким',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Угостить воспитуемую сладостями в награду за ее поведение',
            'children' => static::slaveRewardSweets(),
        ];

        return $menu;
    }

    private static function slaveRewardMoral()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Скупо одобрить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% заслуживает небольшой похвалы (1)',
        ];
        $menu[] = [
            'text' => 'Похвалить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Пожалуй, %{apprentice_name}% неплохо справляется, можно ее похвалить (2)',
        ];
        $menu[] = [
            'text' => 'Увесистый комплимент',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Сделать %{apprentice_name}% комплимент за ее повидение (3)',
        ];
        $menu[] = [
            'text' => 'Обещать поощрение',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Пообещать, что %{apprentice_name}% получит награду за ее поведение (4)',
        ];
        $menu[] = [
            'text' => 'Обещать подарок',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Пообещать, что %{apprentice_name}% скоро получит какой-нибудь подарок (5)',
        ];

        return $menu;
    }

    private static function slaveRewardDate()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Прогулка на крыше',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Прогуляться с %{apprentice_name}% по крыше (=1)',
        ];
        $menu[] = [
            'text' => 'Прогулка по городу',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% пойдёт с вами на прогулку по городу (=2)',
        ];
        $menu[] = [
            'text' => 'Сходить на пляж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Взять %{apprentice_name}% с собой на пляж (2 искры) (=3)',
        ];
        $menu[] = [
            'text' => 'Сходить в театр',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Сходить с %{apprentice_name}% в театр (4 искры) (=4)',
        ];
        $menu[] = [
            'text' => 'Сходить в ресторан',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% отправится с вами в ресторан (8 искр) (=5)',
        ];

        return $menu;
    }

    private static function slaveRewardFreeTime()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Час отдыха',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Дать воспитуемой час отдыха (=1)',
        ];
        $menu[] = [
            'text' => 'Час развлечений',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% получит час на всякие развлечения, это должно её порадовать (=2)',
        ];
        $menu[] = [
            'text' => 'Отдых до вечера',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% сможет отдохнуть до вечера (=3)',
        ];
        $menu[] = [
            'text' => 'Развлечения до вечера',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Отправить подопечную развлекаться до вечера, жизнь не так уж и плоха (=4)',
        ];
        $menu[] = [
            'text' => 'Гефсиманский сад',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% пойдёт отдыхать в Гефсиманский сад (=5)',
        ];
        $menu[] = [
            'text' => 'Горячие источники (2 искры)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Отправить воспитуемую расслабляться к горячим источникам, нет места спокойней этого (=2)',
        ];
        $menu[] = [
            'text' => '"Золотая клетка" (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Отправить воспитемую на весь день отдыхать с другими рабынями в золотую клетку (=5)',
        ];

        return $menu;
    }

    private static function slaveRewardErotic()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Нежные объятия',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Заключить %{apprentice_name}% в нежные объятия (=1)',
        ];
        $menu[] = [
            'text' => 'Чувственный массаж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Сделать воспитуемой лечебный успокаивающий массаж (=2)',
        ];
        $menu[] = [
            'text' => 'Петтинг',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Наградить подопечную эротическим петтингом (=3)',
        ];
        $menu[] = [
            'text' => 'Вибраторы',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Поиграть вибраторами с подопечной (=4)',
        ];
        $menu[] = [
            'text' => 'Кунилингус',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% получит в награду эротический куни (=5)',
        ];

        return $menu;
    }

    private static function slaveRewardPresent()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Букет цветов (2 искры)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Преподнести воспитуемой букет цветов',
        ];
        $menu[] = [
            'text' => 'Парфюм (5 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить воспитуемой парфюм',
        ];
        $menu[] = [
            'text' => 'Тёплый плед (9 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить воспитуемой тёплый плед',
        ];
        $menu[] = [
            'text' => 'Плюшевая игрушка (15 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной плюшевую игрушку',
        ];
        $menu[] = [
            'text' => 'Мини-пони (50 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной мини-пони',
        ];
        /*$menu[] = [
            'text' => 'Драгоценности',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '',
        ];*/
        /*$menu[] = [
            'text' => 'Шмотки',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '',
        ];*/

        return $menu;
    }

    private static function slaveRewardSweets()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Шоколадка (1 искра)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной шоколадку',
        ];
        $menu[] = [
            'text' => 'Кремовый торт (2 искры)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной кремовый торт',
        ];
        $menu[] = [
            'text' => 'Банановый пломбир (4 искры)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной банановый пломбир',
        ];
        $menu[] = [
            'text' => 'Эйфорижелле (8 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной эйфорижелле',
        ];
        $menu[] = [
            'text' => 'Вестурианская амброзия (25 искр)',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подарить подопечной вестурианскую амброзию',
        ];

        return $menu;
    }

    private static function slavePunish()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Психологическое давление',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Наказать рабыню резкими словами, воздействуя на разум',
            'children' => static::slavePunishMoral(),
        ];
        $menu[] = [
            'text' => 'Рукоприкладство',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '',
            'children' => static::slavePunishBeat(),
        ];
        $menu[] = [
            'text' => 'Флаггеляция',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Пороть рабыню',
            'children' => static::slavePunishFlaggelation(),
        ];
        $menu[] = [
            'text' => 'Бондаж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Наказать рабыню, используя связывание',
            'children' => static::slavePunishBondage(),
        ];
        $menu[] = [
            'text' => 'Наказание стыдом',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Наказать рабыню, заставив проделывать унизительные вещи',
            'children' => static::slavePunishShame(),
        ];

        return $menu;
    }

    private static function slavePunishMoral()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Строго отчитать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'По-хорошему объяснить, в чём %{apprentice_name}% не права (=1)',
        ];
        $menu[] = [
            'text' => 'Грубо обругать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% должна понять, что если она будет продолжать в таком духе, ей не поздоровится (=2)',
        ];
        $menu[] = [
            'text' => 'Угрожать пытками',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Угрожать страшными пытками (=3)',
        ];
        $menu[] = [
            'text' => 'Угрожать продажей',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Угрожать воспитуемой продать её первому попавшемуся работорговцу (=4)',
        ];
        $menu[] = [
            'text' => 'Угрожать смертью',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Угрожать смертью (=5)',
        ];

        return $menu;
    }

    private static function slavePunishBeat()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Отшлепать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Легко отшлепать рабыню (=1)',
        ];
        $menu[] = [
            'text' => 'Дать пощечину',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Дать рабыне пощечину (=2)',
        ];
        $menu[] = [
            'text' => 'Выдрать за ухо',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Выдрать рабыню за ухо (=3)',
        ];
        $menu[] = [
            'text' => 'Ударить в живот',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Ударить рабыню в живот (=4)',
        ];
        $menu[] = [
            'text' => 'Жестоко избить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Жестоко избить рабыню (=5)',
        ];

        return $menu;
    }

    private static function slavePunishFlaggelation()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Отшлепать тапком',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% получит хороших ударов тапком (=1)',
        ];
        $menu[] = [
            'text' => 'Выпороть ремнем',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => '%{apprentice_name}% явно не хватает ремня (=2)',
        ];
        $menu[] = [
            'text' => 'Выдрать за ухо',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Выдрать рабыню за ухо (=3)',
        ];
        $menu[] = [
            'text' => 'Высечь розгой',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Высечь рабыню плетью (=4)',
        ];
        $menu[] = [
            'text' => 'Высечь кнутом',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' =>  'Пора воспользоваться кнутом (=5)',
        ];

        return $menu;
    }

    private static function slavePunishBondage()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Поставить в угол',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Поставить воспитуемую в угол (=1)',
        ];
        $menu[] = [
            'text' => 'Поставить на горох',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Поставить воспитуемую на горох (=2)',
        ];
        $menu[] = [
            'text' => 'Веревочное седло',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подсадить рабыню за ноги (=3)',
        ];
        $menu[] = [
            'text' => 'Подвесить за ноги',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Подвесить рабыню за ноги (=4)',
        ];
        $menu[] = [
            'text' => 'Веревочная дыба',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' =>  'Подвесить рабыню на дыбе (=5)',
        ];
        $menu[] = [
            'text' => 'Депривация',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' =>  '%{apprentice_name}% наденет депривационный костюм (=2)',
        ];
        $menu[] = [
            'text' => 'Эротический бондаж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' =>  'Связать рабыню и добавить вибраторов (=2)',
        ];
        $menu[] = [
            'text' => 'Болевой бондаж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' =>  'Связать от души, чтобы %{apprentice_name}% прочувствовала боль (=3)',
        ];

        return $menu;
    }

    private static function slavePunishShame()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Прогулка голышом',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Отправить воспитуемую прогуляться голышом (=1)',
        ];
        $menu[] = [
            'text' => 'Позорный подиум',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Послать воспитуемую позировать на рынке рабынь (=2)',
        ];
        $menu[] = [
            'text' => 'Живой холст',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Поставить подопечную на улицу и разрешить использовать её в качестве живого холста (=3)',
        ];
        $menu[] = [
            'text' => 'Общественное пользование',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' => 'Отдать подопечную для пользования всеми желающими (=4)',
        ];
        $menu[] = [
            'text' => 'Общественный туалет',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'comment' =>  'Отдать подопечную для использования всеми желающими в качестве туалета (=5)',
        ];

        return $menu;
    }

    private static function slaveActivityTalk()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Спросить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'children' => static::slaveActivityTalkAsk(),
        ];
        $menu[] = [
            'text' => 'Воздействовать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'children' => static::slaveActivityTalkLeverage(),
        ];

        return $menu;
    }

    private static function slaveActivityTalkAsk()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Расскажи о своем прошлом',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Как настроение?',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Что ты думаешь обо мне?',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'У тебя есть ко мне просьбы?',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Чем ты хочешь заниматься?',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Чем тебе неприятно?',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];

        return $menu;
    }

    private static function slaveActivityTalkLeverage()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Разъяснить ее положение',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Ободрить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Запугать',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Поставить на место',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];

        /*$menu[] = [
            'text' => 'Дать новое имя',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];*/

        return $menu;
    }

    private static function getSlaveAssignments()
    {
        return [
            [
                'text' => 'Иди на занятия',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/activity.png',
            ],
            [
                'text' => 'Сделай зарядку',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/slave_assignments.png',
            ],
            [
                'text' => 'Приберись в доме',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Приготовь ужин',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Вымойся',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Подои исчадие',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Обслужи меня',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
                'children' => static::slaveAssignmentsCare(),
            ],
            [
                'text' => 'Прими наркотик',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Выпей зелье',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
        ];
    }

    private static function slaveAssignmentsCare()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Помой меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Сделай мне массаж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Развлеки меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Потанцуй для меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Станцуй стриптиз',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Эротическое шоу',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Лесбийское шоу',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Секс втроем',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];

        return $menu;
    }

    private static function getAssistantAssignments()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Проведи урок',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Приберись в доме',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Приготовь ужин',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Подои Исчадие',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Секс-обучение',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Вагинальный секс',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Анальный секс',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Оральный секс',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Обслужи меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
            'children' => static::assistantAssignmentsCare(),
        ];
        $menu[] = [
            'text' => 'Прими наркотик',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Выпей зелье',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];

        return $menu;
    }

    private static function assistantAssignmentsCare()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Помой меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Сделай мне массаж',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Развлеки меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Потанцуй для меня',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Станцуй стриптиз',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Эротическое шоу',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Лесбийское шоу',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Секс втроем',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];

        return $menu;
    }

    private static function getDomesticIssues()
    {
        return [
            [
                'text' => 'Помыться',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Приготовить еду',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Прибраться в доме',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Принять химикат',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Выпить зелье',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Бухгалтерия',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
                'children' => static::domecticIssuesAccaunting(),
            ],
            [
                'text' => 'Свое дело',
                'url' => '#',
                'image' => '/assets_game/img/ui_overhaul/assistant_assignments.png',
            ],
        ];
    }

    private static function domecticIssuesAccaunting()
    {
        $menu = [];

        $menu[] = [
            'text' => 'Финансовый отчет',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Бедный',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Улучшить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Ухудшить',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Заняться счетами лично',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Воспитуемая - счетовод',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];
        $menu[] = [
            'text' => 'Ассистент - счетовод',
            'url' => '#',
            'image' => '/assets_game/img/ui_overhaul/talk.png',
        ];

        return $menu;
    }

}