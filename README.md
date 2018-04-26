# Monty Hall
The Monty Hall paradox is a paradox because it is counter-intuitive even though it is mathematically correct.

You as a contestant on a game show get to pick one of three doors.
A big prize is behind just one door, while the other two contain worthless things.
After making your selection, the host reveals one of the doors you did not pick always revealing junk.
You now have a choice to switch your chosen door.

Intuitively, we say that each door has a ⅓-⅓-⅓ chance of being the prize, but this is only correct in the beginning.

Many believe that after revealing one of the worthless doors, that the two remaining doors have a ½-½ chance.  This is not the case.

After the reveal of a worthless item, the remaining door you did not pick has a ⅔ chance of being the big prize.
The door you picked still has a ⅓ chance.
This is because of two facts:
* The two doors you did not pick together had a ⅔ chance of being the big prize.
* And they still do, you just know what is behind one of them.

## Running
You can just run this single-file script with `php mh.php`.

## Output
This script will output something similar to the following:
~~~
After 1000000 rounds we won 666866 times! (66.6866%)
After 2000000 rounds we won 1334596 times! (66.7298%)
After 3000000 rounds we won 2001677 times! (66.72257%)
After 4000000 rounds we won 2667770 times! (66.69425%)
After 5000000 rounds we won 3334176 times! (66.68352%)
After 6000000 rounds we won 4001079 times! (66.68465%)
After 7000000 rounds we won 4667219 times! (66.67456%)
After 8000000 rounds we won 5334197 times! (66.67746%)
After 9000000 rounds we won 6000247 times! (66.66941%)
After 10000000 rounds we won 6666854 times! (66.66854%)
~~~
