<!-- Generate an instruction that makes use of "echo" -->
    <article class="article">   
        <h3>1. Generate an instruction that makes use of "echo"</h3>
<pre>
echo(string ...$","expressions",": void)
</pre>
        <h5>example :</h5>
<pre>
echo 'This', 'string ', 'was ', 'made ', 'with multiple parameters.'
</pre>
        <h5>result :</h5>
        <?php
            echo 'This', 'string ', 'was ', 'made ', 'with multiple parameters.'
        ?>
    </article>

<!-- Generate an instruction that makes use of "print" -->
    <article class="article">   
        <h3>2. Generate an instruction that makes use of "print"</h3>
<pre>
print(string $","expressions",": int)
</pre>
        <h5>example :</h5>
<pre>
print "This string spans
multiple lines. The newlines will be
output as well";

$foo = "example";
print "foo is example";
</pre>
        <h5>result :</h5>
        <?php
            print "This string spans
            multiple lines. The newlines will be
            output as well";
            echo "<br>";
            $foo = "example";
            print "Foo is $foo";
        ?>
    </article>

<!-- Generate an instruction that makes use of "print_r" -->
    <article class="article">   
        <h3>3. Generate an instruction that makes use of "print_r"</h3>
        <p>Displays information about a variable in a way that's readable by humans.</p>
<pre>
print_r(mixed $"."value, bool $"."return = false): string|bool
</pre>
        <h5>example :</h5>
<pre>
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
</pre>
        <h5>result :</h5>
        <?php
            $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
            print_r ($a);
        ?>
    </article>
