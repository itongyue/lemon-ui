<?php
/**
 * SubmitAction.php
 * BaiSam admin
 *
 * Created by realeff on 2018/10/28.
 * Copyright ©2018 Jiangxi baisam information technology co., LTD. All rights reserved.
 */


namespace BaiSam\UI\Grid\Actions;


/**
 * 为表格添加选择框列功能。
 * 2019-11-03 更新功能：为选择框绑定数据库字段，根据数据库字段的值来确定是否勾选选择框。更新功能主要思路如下：
 * 1、@see SubmitAction::checkboxField()  在SubmitAction中添加checkboxField方法，设置勾选框绑定的字段名
 * 2、@see  ManyActions::checkboxField()  在ManyActions中添加checkboxField方法，取SubmitAction中的checkboxField值
 * Class SubmitAction
 * @package BaiSam\UI\Grid\Actions
 */
class SubmitAction extends ButtonAction
{
    protected $selectRow = true;

    protected $type = 'submit';

    protected $field = 'status';

    public function checkboxField($field = null)
    {
        if (!$field) return $this->field;
        $this->field = $field;
        return $this;
    }


    public function disableSelectRow()
    {
        $this->selectRow = false;

        return $this;
    }

    public function needSelectRow()
    {
        return $this->selectRow;
    }

    protected function formatAttributes()
    {
        if ($this->selectRow) {
            $this->attribute('select-rows', true);
        }

        return parent::formatAttributes();
    }
}