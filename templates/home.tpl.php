    <h1>Analyse d'un code JavaScript</h1>

    <p>
        Ci-dessous, tu trouveras plusieurs instructions ou extraits de code.<br>
        Analyse ce code afin de sélectionner <strong>son but ou ses buts</strong> (menu(s) déroulant(s) juste au dessus)
    </p>

    <div id="fullCode">
        <pre><code class="js">
<?php foreach ($instructions as $instructionKey=>$instructionItem) : ?>
<?= $instructionKey > 0 ? substr($instructionItem['instruction'], 0, 2) === '//'  ? str_replace('//', "\n//", $instructionItem['instruction'])."\n" : $instructionItem['instruction']."\n" : $instructionItem['instruction']."\n" ?>
<?php endforeach; ?>
        </code></pre>

        <button>J'ai bien analysé le code, je peux passer à l'exercice</button>
    </div>


    <div id="exo">
        <div id="score">score</div>
        <button>J'aimerais revoir le code entier</button>

        <?php foreach ($instructions as $instructionKey=>$instructionItem) : ?>
        <form id="instruction<?= $instructionKey ?>" class="instruction<?php if ($instructionItem['nbChoices'] === 0) echo ' instruction--disabled' ?>" data-id="<?= $instructionKey ?>">
            <div>
            <?php for ($i = 0; $i < $instructionItem['nbChoices']; $i++) : ?>
            <select name="code[]">
                <option value="0">Sélectionner</option>
                <?php foreach ($choices as $groupLabel=>$groupChoices) : ?>
                <optgroup label="<?= $groupLabel ?>">
                    <?php foreach ($groupChoices as $choiceId=>$choiceLabel) : ?>
                    <option value="<?= $choiceId ?>"><?= $choiceLabel ?></option>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </optgroup>
            </select>
            <?php endfor; ?>
            </div>
            <pre><code class="js"><?= $instructionItem['instruction'] ?></code></pre>
        </form>
        <?php endforeach; ?>
    </div>
    