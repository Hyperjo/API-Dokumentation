## Farming-Preise

Mit dieser Funktion können die aktuellen Farming-Preise auf dem Server abgerufen werden.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | optional |
| version | `1` |
| request | `farming` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=farming`

### Rückgabe

```json
{
  "farming": [
    {
      "itemName": "Mehl",
      "symbol": "https://static.hyperjo.de/img/items/farming/flour.png",
      "currentPrice": 168
    },
    {
      "itemName": "Tiefgekühlte Pommes",
      "symbol": "https://static.hyperjo.de/img/items/farming/frozenfries.png",
      "currentPrice": 131
    },
    {
      "itemName": "Glas",
      "symbol": "https://static.hyperjo.de/img/items/farming/glas.png",
      "currentPrice": 182
    }
  ]
}
```
Aus Schönheitsgründen wird hier nicht die gesamte Rückgabe abgebildet. Natürlich werden von der API alle Farminggüter zurückgegeben.

### Changelog

- Seit Version 1 verfügbar.
