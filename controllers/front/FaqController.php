<?php
​
class FaqControllerCore extends FrontController {
    public function init() {
        parent::init();
​
        $questions = [
            ["question"=> "First of all, I began with being troubled about what to question these fellows on.",
                "answer"=> "Why it is those five demons are treated as one, and so on. If the five demons aren't together will any limitations in ability occur, and so on? If one dies or there is even one demon missing from their number, does it become impossible to demonstrate an effect in unison, and so on."],
            ["question"=> "Though I can think of various things, well, I'll set that aside.",
                "answer"=> "The Five Demon Squadron also, just likes Heat Demon-kun and the others, experienced 【Existence Evolution】 upon obtaining the title."],
            ["question"=> "The race the five demons became was 【Karma Demon (Karma) - Subspecies.",
                "answer"=> "To describe a 【Karma Demon】 briefly, it is not of the 【Demon Man (Lord)】 system but a higher species of the 【Big Demon (Ogre)】 system, it's such a thing."],
        ];
        $this->context->smarty->assign(array('questions'=> $questions));
    }
​
    public function initContent() {
        parent::initContent();
​
        $this->setTemplate(_PS_THEME_DIR_.'faq.tpl');
    }
​
}