<ul>
    <?php for ($i = 1; $i <= 20; $i++):
         $i % 2 == 0 ? $color = "green" : $color = "blue" ?>
        <li><span style="color:<?=$color?>"><?=$i?></span></li>
    <?php endfor; ?>
</ul>
