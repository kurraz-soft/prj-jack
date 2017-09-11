<?php

namespace app\modules\game\models;

use app\models\User;

/**
 * This is the model class for table "game_data".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $date_update
 * @property string $data
 * @property int $n
 * @property bool $active
 *
 * @property User $user
 */
class GameData extends \yii\db\ActiveRecord
{
    const MAX_SAVES = 5;

    /**
     * @var array
     */
    private $extractedData = [];

    public function beforeSave($insert)
    {
        $this->data = serialize($this->extractedData);

        return parent::beforeSave($insert);
    }

    public function getExtractedData()
    {
        if(!$this->extractedData)
        {
            $this->extractedData = $this->data?unserialize($this->data):[];
        }
        return $this->extractedData;
    }

    public function setDataValue($key, $value)
    {
        $this->extractedData[$key] = $value;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['date_update'], 'safe'],
            [['data'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'date_update' => 'Date Update',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function findActive($user_id)
    {
        $data = static::find()->where(['user_id' => $user_id, 'active' => true])->one();
        if(!$data)
        {
            $data = new static();
            $data->user_id = $user_id;
            $data->n = -1;
            $data->active = true;
            $data->save();
        }

        return $data;
    }
}
