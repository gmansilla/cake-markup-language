<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->_compile('$this->response->type(%s);', $this->_processAttribute($attributes, 'value'));
}

