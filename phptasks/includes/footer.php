<hr>
<footer class="bg-light text-center py-3 mt-4">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> Husain – HAMK</p>
    <?php
    // Current page name
    $file = basename($_SERVER['PHP_SELF']);
    // Last modified time of the current page
    $mod_time = filemtime($file);
    echo "<small>Last modified time of this file ($file): " . date("d-m-Y H:i:s", $mod_time) . "</small>";
    ?>
</footer>

</body>
</html>
