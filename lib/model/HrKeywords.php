<?php

class HrKeywords extends BaseHrKeywords {
    public function __toString() {
        return $this->getKeywordEn();
    }
}
