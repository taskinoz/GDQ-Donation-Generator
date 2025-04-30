# GDQ-Donation-Generator

A Generator for GDQ Donations - https://taskinoz.com/gdq/

## API

```
GET https://taskinoz.com/gdq/api/
```

### Parameters

| Name   | Type       | Description                                                             |
| ------ | ---------- | ----------------------------------------------------------------------- |
| `temp` | 0-7        | Return a random donation message from the specified donations template. |
| `meme` | true/false | Includes 2 extra meme templates.                                        |

### Examples

```
GET https://taskinoz.com/gdq/api/?temp=0

Hey guys, long time viewer, first time donator. It gives me great joy to view to a great cause. Greetings from frames. PS: donate the animal, view the cancer.
```

```
GET https://taskinoz.com/gdq/api/&meme=true

Weeee weeee weeee! Wiiiii wiiiii wiiiii wiiiii wiiiii. Weeee wiiiii. Weeee  wiiiii wiiiii wiiiii wiiiii wiiiii wiiiii wiiiii wiiiii wiiiii? Woooooohooooooo!!!
or
Honk honk! Honk honk honk honk honk honk. Honk honk. Honk  honk honk honk honk honk honk honk honk honk honk? Hoooooonnnnnnnnkkkkkk!!!
```
