<h1>C++ Operator Precedence and Associativity</h1>

<p class="editor-contents__short-description">In this tutorial, we will learn about the
    precedence and associativity of operators in C++ with the help of examples.</p>

<div id="node-1681" class="node node-cpp-tutorial clearfix"
about="/cpp-programming/operators-precedence-associativity" typeof="sioc:Item foaf:Document">

<span property="dc:title" content="C++ Operator Precedence and Associativity"
class="rdf-meta element-hidden"></span>

<div class="content">
<h2 id="precedence">C++ Operators Precedence</h2>

<p>If there are multiple operators in a single expression, the operations are
    not evaluated simultaneously. Rather, operators with higher
    <strong>precedence</strong> have their operations evaluated first.</p>

<p>Let us consider an example:</p>

<pre>
<code>int x = 5 - 17 * 6; </code></pre>

<p>Here, the multiplication operator <code>*</code> is of higher level
precedence than the subtraction operator <code>-</code>. Hence, <code>17*
        6</code> is evaluated first.</p>

<p>As a result, the above expression is equivalent to</p>

<pre>
<code>int x = 5 - (17 * 6);</code></pre>

<p>If we wish to evaluate <code>5 - 17</code> first, then we must enclose them
    within <strong>parentheses</strong>:</p>

<pre>
<code>int x = (5 - 17) * 6;</code></pre>

<hr>
<h3 id="example1">Example 1: Operators Precedence</h3>

<pre class="cpp-exec">
<code>#include &lt;iostream&gt;
using namespace std;

int main() {

// evaluates 17 *6 first
int num1 = 5 - 17* 6;

// equivalent expression to num1
int num2 = 5 - (17 * 6);

// forcing compiler to evaluate 5 - 17 first
int num3 = (5 - 17) * 6;

cout &lt;&lt; "num1 = " &lt;&lt; num1 &lt;&lt; endl;
cout &lt;&lt; "num2 = " &lt;&lt; num2 &lt;&lt; endl;
cout &lt;&lt; "num3 = " &lt;&lt; num3 &lt;&lt; endl;

return 0;
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>num1 = -97
num2 = -97
num3 = -72</samp></pre>

><p class="note-tip"><strong>Note:</strong> Because there are a lot of operators in C++ with multiple levels of precedence, it is highly recommended that we use <strong>parentheses</strong> to make our code more readable.</p>

<hr>
<h3 id="precedence-table">C++ Operators Precedence Table</h3>

<p>The following table (taken from <a
        href="https://en.cppreference.com/w/cpp/language/operator_precedence">cppreference.com</a>)
    shows the precedence of C++ operators. Precedence Level 1 signifies
    operators of highest priority, while Precedence Level 17 signifies operators
    of the lowest priority.</p>

<div class="table-responsive">
<table>
    <tr>
        <th>Precedence</th>
        <th>Operator</th>
        <th>Description</th>
        <th>Associativity</th>
    </tr>
    <tr>
        <td>1</td>
        <td>::</td>
        <td>Scope Resolution</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>2</td>
        <td>a++<br>a--<br>type( )<br>type{ }<br>a( )<br>a[ ]<br>.<br>-&gt;
        </td>
        <td>Suffix/postfix increment<br>Suffix/postfix decrement<br>Function
            cast<br>Function cast<br>Function call<br>Subscript<br>Member
            access from an object<br>Member access from object ptr</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>3</td>
        <td>++a<br>--a<br>+a<br>-a<br>!<br>~<br>(type)<br>*a<br>&amp;a<br>sizeof<br>co_await<br>new
            new[ ]<br>delete delete[]</td>
        <td>Prefix increment<br>Prefix decrement<br>Unary plus<br>Unary
            minus<br>Logical NOT<br>Bitwise NOT<br>C style
            cast<br>Indirection
            (dereference)<br>Address-of<br>Size-of<br>await-expression<br>Dynamic
            memory allocation<br>Dynamic memory deallocation</td>
        <td>Right to Left</td>
    </tr>
    <tr>
        <td>4</td>
        <td>.*<br>-&gt;*</td>
        <td>Member object selector<br>Member pointer selector</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>5</td>
<td>a* b<br>a / b<br>a % b</td>
        <td>Multiplication<br>Division<br>Modulus</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>6</td>
        <td>a + b<br>a - b</td>
        <td>Addition<br>Subtraction</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>7</td>
        <td>&lt;&lt;<br>&gt;&gt;</td>
        <td>Bitwise left shift<br>Bitwise right shift</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>8</td>
        <td>&lt;=&lt;</td>
        <td>Three-way comparison operator</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>9</td>
        <td>&lt;<br>&lt;=<br>&gt;<br>&gt;=</td>
        <td>Less than<br>Less than or equal to<br>Greater than<br>Greater
            than or equal to</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>10</td>
        <td>==<br>!=</td>
        <td>Equal to<br>Not equal to</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>11</td>
        <td>&amp;</td>
        <td>Bitwise AND</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>12</td>
        <td>^</td>
        <td>Bitwise XOR</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>13</td>
        <td>|</td>
        <td>Bitwise OR</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>14</td>
        <td>&amp;&amp;</td>
        <td>Logical AND</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>15</td>
        <td>||</td>
        <td>Logical OR</td>
        <td>Left to Right</td>
    </tr>
    <tr>
        <td>16</td>
        <td>a ? b :
            c<br>throw<br>co_yield<br>=<br>+=<br>-=<br>*=<br>/=<br>%=<br>&lt;&lt;=<br>&gt;&gt;=<br>&amp;=<br>^=<br>|=
        </td>
        <td>Ternary Conditional<br>throw operator<br>yield expression (C++
            20)<br>Assignment<br>Addition Assignment<br>Subtraction
            Assignment<br>Multiplication Assignment<br>Division
            Assignment<br>Modulus Assignment<br>Bitwise Shift Left
            Assignment<br>Bitwise Shift Right Assignment<br>Bitwise AND
            Assignment<br>Bitwise XOR Assignment<br>Bitwise OR Assignment
        </td>
        <td>Right to Left</td>
    </tr>
    <tr>
        <td>17</td>
        <td>,</td>
        <td>Comma operator</td>
        <td>Left to Right</td>
    </tr>
</table>
</div><br><br>

<hr>
<h2 id="associativity">C++ Operators Associativity</h2>

<p>Operator associativity is the <strong>direction</strong> from which an
expression is evaluated. For example,</p>

<pre>
<code>int a = 1;
int b = 4;

// a will be 4
a = b;</code></pre>

<p>Take a look at <code>a = 4;</code> statement. The associativity of the
<code>=</code> operator is from right to left. Hence, the value of
<var>b</var> is assigned to <var>a</var>, and not in the other direction.
</p>

<p>Also, multiple operators can have the same level of precedence (as we can see
from the above table). When multiple operators of the same precedence level
are used in an expression, they are evaluated according to their
<strong>associativity</strong>.</p>

<pre>
<code>int a = 1;
int b = 4;
b += a -= 6;</code></pre>

<p>Both operators <code>+=</code> and <code>-=</code> operators have the same
precedence. Since the associativity of these operators is from right to
left, here is how the last statement is evaluated.</p>

<ul>
<li><code>a -= 6</code> is evaluated first. Hence, <var>a</var> will be
<strong>-5</strong></li>
<li>Then, <code>b += -5</code> will be evaluated. Hence, <var>b</var> will
be <strong>-1</strong></li>
</ul>
<hr>
<h3 id="example2">Example 2: Operators Associativity</h3>

<pre class="cpp-exec">
<code>#include &lt;iostream&gt;
using namespace std;

int main() {
int a = 1;
int b = 4;

// a -= 6 is evaluated first
b += a -= 6;

cout &lt;&lt; "a = " &lt;&lt; a &lt;&lt; endl; ;
cout &lt;&lt; "b = " &lt;&lt; b;
}</code></pre>

<p><strong>Output</strong></p>

<pre>
<samp>a = -5
b = -1</samp></pre>
</div>

</div>
