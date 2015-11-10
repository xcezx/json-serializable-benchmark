# JsonSerializable のパフォーマンスを調べてみた

[phpbench/phpbench](https://github.com/phpbench/phpbench) とゆーナイスな benchmark library を使いたかっただけともいう。

## 結果

```
(xcezx@tinybox.local) $ ./vendor/bin/phpbench run --report=aggregate
PhpBench 0.6. Running benchmarks.
Using configuration file: /Users/xcezx/scratch/json-serializable-benchmark/phpbench.json.dist

..
Done (2 subjects, 20 iterations) in 12.40s


+-----------+--------------------+-------+--------+---------+-------+----------+---------+-----------+-----------+
| benchmark | subject            | group | params | revs    | iters | time     | memory  | deviation | stability |
+-----------+--------------------+-------+--------+---------+-------+----------+---------+-----------+-----------+
| Bench     | benchJsonEncode    |       | []     | 1000000 | 10    | 5.0094μs | 10,568b | 0.00%     | 91.07%    |
| Bench     | benchJsonSerialize |       | []     | 1000000 | 10    | 5.5356μs | 9,688b  | +10.50%   | 93.89%    |
+-----------+--------------------+-------+--------+---------+-------+----------+---------+-----------+-----------+
```
