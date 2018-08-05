<?php
/**
 * FormBuilder表单生成器
 * Author: xaboy
 * Github: https://github.com/xaboy/form-builder
 */

/**
 * Cascader 多级联动组件方法说明
 * 方法 返回值 方法名(参数) 注释
 * @method $this type(String $type) 数据类型, 支持 city_area(省市区三级联动), city (省市二级联动), other (自定义)
 * @method $this data(Array $data) 可选项的数据源,
 * 三级数据结构示例:{
 *       "value":"陕西省", "label":"陕西省", "children":[{
 *           "value":"西安市", "label":"西安市", "children":[{
 *              "value":"高新区", "label":"高新区"
 *          }]
 *       }]
 *  }
 * @method $this disabled(Boolean $bool) 是否禁用选择器
 * @method $this clearable(Boolean $bool) 是否支持清除
 * @method $this placeholder(String $placeholder)
 * @method $this trigger(String $trigger) 次级菜单展开方式，可选值为 click 或 hover
 * @method $this changeOnSelect(Boolean $bool) 当此项为 true 时，点选每级菜单选项值都会发生变化, 默认为 false
 * @method $this size(String $size) 输入框大小，可选值为large和small或者不填
 * @method $this filterable(Boolean $bool) 是否支持搜索
 * @method $this notFoundText(String $text)
 * @method $this transfer(Boolean $bool) /是否将弹层放置于 body 内，在 Tabs、带有 fixed 的 Table 列内使用时，建议添加此属性，它将不受父级样式影响，从而达到更好的效果
 * @method $this required($message = null, $trigger = 'change') 设置为必选项
 * @method $this value($value) 设置value
 * @method string getType() 获取组件类型 city省市二级联动,city_area省市区三级联动,other其他(默认)
 */

$cascader = \FormBuilder\Form::cityArea('address','省市区三级联动','陕西省','西安市','新城区')->clearable(true);