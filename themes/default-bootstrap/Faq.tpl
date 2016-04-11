<h1>FAQ</h1>
<ul>
    {foreach from=$questions item=question}
        <li><a href="#question{$question@iteration}">{$question.question}</a></li>
    {/foreach}
</ul>
<ul>
    {foreach from=$questions item=question}
        <li id="question{$question@iteration}">
            <h2>{$question.question}</h2>
            <p>{$question.answer}</p>
        </li>
    {/foreach}
</ul>