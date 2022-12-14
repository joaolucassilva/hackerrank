Alice and Bob each created one problem for HackerRank. A reviewer
rates the two challenges, awarding points on a scale from 1 to 100
three categories: problem, clarity, originality, and dificulty.
The rating for Alice challenge is the triplet a = (a[0],a[1],a[2]), and
the rating for Bob challenge is the triplet b = (b[0],b[1],b[2]).
The task is to find their comparison points by comparing a[0] with
b[0], a[1] with b[1], and a[2] with b[2].

- if a[i] > b[i], then Alice is awarded 1 point.
- if a[i] < b[i], then Bob is awarded 1 point.
- if a[i] = b[i], then neither person receives a point.

Comparison points is the total points a person earned.
Given a and b, determine their respective comparison points.

## Example

a = [1, 2, 3]
b = [3, 2, 1]

- For elements **0**, Bob is awarded a point because a[0].
- For the equal elements a[1] and b[1], no points are earned.
- Finally, for elements 2, a[2] > b[2] so Alice receives a point.

The return array is [1, 1] with Alice score first and Bob second.

## Function Description

Complete the function compareTriplets.

- int a[3]: Alice challenge rating
- int b[3]: Bob challenge rating

## Return

- int[2]: Alice score is in the first position, and Bob score is in the second.

## Input Format

The first line contains 3 space-separated integers, a[0], a[1] and a[2],
the respective values int triplet a.
The second line contains 3 space-separated intergers, b[0], b[1] and b[2],
the respective values in triplet b.

## Constraints

- 1 <= a[i] <= 100
- 1 <= b[i] <= 100

## Sample Input 0

```
5 6 7
3 6 10
```

## Sample Output 0

```
1 1
```

## Explanation 0

In this example:

- a = (a[0], a[1], a[2]) = (5, 6, 7)
- a = (b[0], b[1], b[2]) = (3, 6, 10)

Now, lets compare each individual score:

- a[0] > b[0], so Alice receives **1** point.
- a[0] = b[0], so nobody receives a point.
- a[0] < b[0], so Bob receives **1** point.

Alice's comparison score is **1**, and Bob comparison score is **1**.
Thus, we return the array **[1, 1]**.

## Sample Input 1

```
17 28 30
99 16 8
```

## Sample Output 1

```
2 1
```

## Explanation 1

Comparing the 0 elements, 17 < 99 so Bob receives a point.
Comparing the 1 and 2 elements, 28 > 16 and 30 > 8 so alice receives two points.
The return array is **[2, 1]**.