## Code Guidelines - PHP

- Never close php-file with `?>`
- short echo only like `<?="Text";?>`
- Variable names should be all `lowercase`, with words separated by `underscores` $test_test
- Constants should be all `uppercase`, with words separated by `underscores` TEST_TEST
- Counting variables should be like `$i, $i1, $i2, ...`
- Controle structures functions (statements) which HAVE space between name and bracket
  - do / while
  - for / foreach
  - if / elseif
  - switch
- Controle structures functions (statements) which DON'T HAVE space between name and bracket
  - define
  - die / exit
  - include / include_once
  - require / require_once
  - ... else stuff
- Function names have NO space between name and bracket
- Function arguments SHOULD be separated by spaces, however, there should be NO spaces between the
arguments and the opening/closing brackets, like `function test_test($test1, $test2)`
- If string contains no variables, use `single quotes`
- When using associative arrays, should include the key within `single quotes` and `underscores`
- Use lowercase for boolean `true / false`
- Try to use `===` if compare something
- By using string operators, should be NO spaces on the sides of it

### Examples: IF-ELSE statement

```
if ((condition1 || condition2)
&&  (condition3 === condition 4)
&&  (condition5)) {
  action1;
}

elseif ((condition6)
&&      (condition7 !== condition8)) {
  action2;
}

else {
  defaultaction;
}
```

### Examples: SWITCH statement

```
switch (condition) {
  case 1:
    action1;
  break;

  case 2:
    action2;
  break;

  default:
    defaultaction;
  break;
}
```

### Examples: ARRAY

In Code:

```
array(
  'foo' => 'bar',
  'spambam' => 'eggs',
);
```

As List:

```
$array = array();
$array['foo'] = 'bar';
$array['spam'] = 'eggs';
```
