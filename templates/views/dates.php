
    <!-- get the “Y-m-d” format -->
    <article class="article">
        <h3>1. Instance the Date Time class, get the “Y-m-d” format  </h3>
        <h5>example :</h5>
<pre>
$d = new DateTime();
echo $d->format('Y-m-d');
</pre>
        <h5>result :</h5>
        <?php
            $d = new DateTime();
            echo $d->format('Y-m-d');
        ?>
    </article>

    <!-- get the current date in any format -->
    <article class="article">
        <h3>2. Get the current date in any format</h3>
        <h5>example :</h5>
<pre>
$d = new DateTime();
echo $d->format('d');
</pre>
        <h5>result :</h5>
        <?php
            $d = new DateTime();
            echo $d->format('d');
        ?>
    </article>

    <!-- get the current day -->
    <article class="article">
        <h3>3. Get the current day</h3>
        <h5>example :</h5>
<pre>
$d = new DateTime();
echo $d->format('m-d');
</pre>
        <h5>result :</h5>
        <?php
            $d = new DateTime();
            echo $d->format('m-d');
        ?>
    </article>

    <!-- get the current month in numerical format  -->
    <article class="article">
        <h3>4. Get the current month in numerical format </h3>
        <h5>example :</h5>
<pre>
$d = new DateTime();
echo $d->format('m');
</pre>
        <h5>result :</h5>
        <?php
            $d = new DateTime();
            echo $d->format('m');
        ?>
    </article>

    <!-- get the current minute with leading zeros   -->
    <article class="article">
        <h3>5. Get the current minute with leading zeros  </h3>
        <h5>example :</h5>
<pre>
$d = new DateTime();
echo $d->format('i');
</pre>
        <h5>result :</h5>
        <?php
            $d = new DateTime();
            echo $d->format('i');
        ?>
    </article>
