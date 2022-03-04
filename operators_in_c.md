## C Precedence And Associativity Of Operators

<p class="editor-contents__short-description">In this tutorial, you'll learn about the precedence and associativity of operators with the help of examples.</p>

<h2 id="precedence">Precedence of operators</h2>

<p>The precedence of operators determines which operator is executed first if there is more than one operator in an expression.</p>

<p>Let us consider an example:</p>

<pre>
<code>int x = 5 - 17* 6;</code></pre>

<p>In C, the precedence of <code>*</code> is higher than <code>-</code> and <code>=</code>. Hence, <code>17* 6</code> is evaluated first. Then the expression involving <code>-</code> is evaluated as the precedence of <code>-</code> is higher than that of <code>=</code>.</p>

<p>Here's a table of operators precedence from higher to lower. The property of <strong>associativity</strong> will be discussed shortly.</p><br>

<hr><h3 id="table">Operators Precedence &amp; Associativity Table</h3>

<center>
<table style="align:center">
        <tr>
            <th>Operator</th>
            <th>Meaning of operator</th>
            <th>Associativity</th>
        </tr>
        <tr>
            <td>()<br>[]<br>-&gt;<br>.</td>
            <td>Functional call <br>Array element reference<br>Indirect member selection<br>Direct member selection</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>!<br>~<br>+<br>-<br>++<br>--<br>&amp;<br>*<br>sizeof<br>(type)</td>
            <td>Logical negation<br>Bitwise(1 's) complement<br>Unary plus<br>Unary
                minus<br>Increment<br>Decrement<br>Dereference (Address)<br>Pointer reference<br>Returns the size of an
                object<br>Typecast (conversion)</td>
            <td>Right to left</td>
        </tr>
        <tr>
            <td>*<br>/<br>%</td>
            <td>Multiply<br>Divide<br>Remainder</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>+<br>-</td>
            <td>Binary plus(Addition)<br>Binary minus(subtraction)</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>&lt;&lt;<br>&gt;&gt;</td>
            <td>Left shift<br>Right shift</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>&lt;<br>&lt;=<br>&gt;<br>&gt;=</td>
            <td>Less than<br>Less than or equal<br>Greater than<br>Greater than or equal</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>==<br>!=</td>
            <td>Equal to<br>Not equal to</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>&amp;</td>
            <td>Bitwise AND</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>^</td>
            <td>Bitwise exclusive OR</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>|</td>
            <td>Bitwise OR</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>&amp;&amp;</td>
            <td>Logical AND</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>||</td>
            <td>Logical OR</td>
            <td>Left to right</td>
        </tr>
        <tr>
            <td>?:</td>
            <td>Conditional Operator</td>
            <td>Right to left</td>
        </tr>
        <tr>
            <td>=<br>*=<br>/=<br>%=<br>+=<br>-=<br>&amp;=<br>^=<br>|=<br>&lt;&lt;=<br>&gt;&gt;=</td>
            <td>Simple assignment<br>Assign product<br>Assign quotient<br>Assign remainder<br>Assign sum<br>Assign
                difference<br>Assign bitwise AND<br>Assign bitwise XOR<br>Assign bitwise OR<br>Assign left
                shift<br>Assign right shift</td>
            <td>Right to left</td>
        </tr>
        <tr>
            <td>,</td>
            <td>Separator of expressions</td>
            <td>Left to right</td>
        </tr>
    </table>
</center>  
<br><br>

<hr><h2 id="associativity" style="margin-top:10px">Associativity of Operators</h2>

<p>The associativity of operators determines the direction in which an expression is evaluated. For example,</p>

<pre>
<code>b = a;</code></pre>

<p>Here, the value of <var>a</var> is assigned to <var>b</var>, and not the other way around. It's because the associativity of the <code>=</code> operator is from right to left.</p>

<div class="clearfix"></div>
<p>Also, if two operators of the same precedence (priority) are present, associativity determines the direction in
    which they execute.</p>

<p>Let us consider an example:</p>

<pre>
1 == 2 != 3</pre>

<p>Here, operators <code>==</code> and <code>!=</code> have the same precedence. And, their associativity is from
    left to right. Hence, <code>1 == 2</code> is executed first.</p>

<p>The expression above is equivalent to:</p>

<pre>
(1 == 2) != 3</pre>

> <p class="note-tip"><strong>Note:</strong> If a statement has multiple operators, you can use parentheses () to make the code more readable.</p>
</div>
