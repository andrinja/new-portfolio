<div class="drawer">
    <div class="header">
        <?php
        function isBetween($from, $till, $input) {
            $f = DateTime::createFromFormat('!H:i', $from);
            $t = DateTime::createFromFormat('!H:i', $till);
            $i = DateTime::createFromFormat('!H:i', $input);
            if ($f > $t) $t->modify('+1 day');
            return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
        }

        if(isBetween('8:00 am', '6:00 pm', date('!H:i'))) { ?>
        <!--  Night time -->
            <div class="graphic">
                <?php include('svg/night-badge.svg') ?>
            </div>
            <div class="title">It's night time</div>
            <div class="caption">Response times may vary &#x1F609</div>
        <?php } else { ?>
        <!--  Day time -->
            <div class="graphic">
                <?php include('svg/day-badge.svg') ?>
            </div>
            <div class="title">Sun's up!</div>
            <div class="caption">Write me, I'm up &#x1F609</div>
        <?php } ?>

    </div>

    <div class="items">
        <a class="drawer-item" href="#home">
            <i class="material-icons">home</i>
            <div class="title">Home</div>
        </a>
        <div id="project-dropdown" class="drawer-item dropdown">
            <div class="dropdown-label">
                <i class="material-icons">photo_library</i>
                <div class="title">Digital projects</div>
                <i class="material-icons dropdown-arrow">keyboard_arrow_down</i>
            </div>
            <div class="dropdown-content">
                <div class="dropdown-drawer-item">
                    <div class="icon"></div>
                    <div class="info">
                        <div class="label">Project 1</div>
                        <div class="caption">Some drawer-item caption</div>
                    </div>
                </div>
                <div class="dropdown-drawer-item">
                    <div class="icon"></div>
                    <div class="info">
                        <div class="label">Project 1</div>
                        <div class="caption">Some drawer-item caption</div>
                    </div>
                </div>
                <div class="dropdown-drawer-item">
                    <div class="icon"></div>
                    <div class="info">
                        <div class="label">Project 1</div>
                        <div class="caption">Some drawer-item caption</div>
                    </div>
                </div>
            </div>
        </div>
        <a class="drawer-item" href="pages/art.php">
            <i class="material-icons">edit</i>
            <div class="title">Traditional art</div>
        </a>
        <a class="drawer-item">
            <i class="material-icons">import_contacts</i>
            <div class="title">Resumé</div>
        </a>
        <div class="drawer-item">
            <i class="material-icons">face</i>
            <div class="title">About me</div>
        </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/templates/dropdown-drawer-item.html');?>
</div>