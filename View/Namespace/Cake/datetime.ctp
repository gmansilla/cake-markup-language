<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->_compile('$out = $this->%s->dateTime(%s, %s, %s, %s); $set = %s; if (!empty($set)) { $this->viewVars[$set] = $out; } else { echo $out; }', $this->_helpers['Form'], $this->_processAttribute($attributes, 'field'), $this->_processAttribute($attributes, 'date'), $this->_processAttribute($attributes, 'time'), $this->_processAttribute($attributes, 'attributes'), $this->_processAttribute($attributes, 'set'));
}

