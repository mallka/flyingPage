<?php

	namespace mallka\flyingpage;

	use Yii;
	use yii\base\InvalidConfigException;
	use yii\db\ActiveRecord;

	/**
	 * The wrapper of Jqgrid
	 *
	 * @feature
	 *         1. column search
	 *         2. column sort
	 *         3. multi select
	 *         4. formartter
	 *         5. inline edit both of cell & line
	 *         6. bulid-in button
	 *         7. custom button
	 *         8. group-flied
	 *
	 * @todo：
	 *      1. Advanced column Search with op  condition: jQuery("#{$this->render_id}").jqGrid('filterToolbar',{
	 *      searchOnEnter: true, enableClear: false,groupOp:"AND",operands:{ "eq" :"==", "ne":"!", "lt":"<", "le":"<=",
	 *      "gt":">", "ge":">="}});
	 *      2. Select下拉框表现异常，需要按空格才可以选
	 *      3. 底部Css风格尚未处理
	 *      4. 部分css支持、树表风格尚未。
	 *
	 *
	 *
	 */
	class FlyingPage extends \yii\base\Widget
	{

		public  $delay=0;
		public  $ignoreKeywords=[];
		public  $maxRPS=3;
		public  $hoverDelay=50;

	

		public function run()
		{
			$view = $this->getView();
			Asset::register($view);
			
			if(empty($this->ignoreKeywords))
            {
                $ignoreKeywords="[]";
            }
			else
            {
                $ignoreKeywords='["'.implode('","',$this->ignoreKeywords).'"]';
            }
			
			return <<< EOF
             window.FPConfig = {
                delay: {$this->delay},
                ignoreKeywords: {$ignoreKeywords},
                maxRPS: {$this->maxRPS},
                hoverDelay: {$this->hoverDelay}
              };
EOF;

		}

	

	}
