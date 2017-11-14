<footer class="footer clearfix" role="contentinfo">

    <div class="container">

        <div class="col medium-4">
            <div class="col medium-4 hide-on-small">
                <h2>Kontakt</h2>
            
                <img src="<?php echo kirby()->urls()->assets() ?>/images/fmcontrol_standort.png" />
            </div>
            <div class="col medium-8">
                <h2>&nbsp;</h2>
                <?php echo $site->address()->kirbytext() ?>
                <p></p>
                <table>
                    <tr>
                        <td>Telefon  </td>
                        <td><?php echo $site->phone()->html() ?></td>
                    </tr>
                    <tr>
                        <td>Fax  </td>
                        <td><?php echo $site->fax()->html() ?></td>
                    </tr>
                </table>
                <p>info@fm-control.de</p>
            </div>
        </div>
        <div class="col medium-4 hide-on-small">
            <h2>Sitemap</h2>
            <?php snippet('footermenu') ?>
        </div>
        <div class="col medium-2 align-right hide-on-small">
            <h2><a href="#top" title="nach oben" class="to_top"><i class="fa fa-angle-up" aria-hidden="true"></i></a></h2>
        </div>      

    </div>
</footer>

</div>
<!-- ENDE PAGE -->

	
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

<?= js('assets/js/jquery.cookieBar.js') ?>
<?= js('assets/js/main.js') ?>

<div class="cookie-message">
    <p>Um unsere Webseite für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Weitere Informationen hierzu erhalten Sie in unserer <a href="<?= $site->find('meta/datenschutz')->url() ?>">Datenschutzerklärung.</a></p>
    <p><strong><a class="cookie-close" href>Ja! Ich stimme der Verwendung von Cookies zu.</a></strong></p>
</div>
</body>
</html>