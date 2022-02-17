## Farming-Preise

Mit dieser Funktion können die aktuellen Farming-Preise auf dem Server abgerufen werden.

### Anfrage

| Parameter | Beschreibung |
|-----------|--------------|
| key       | optional     |
| version   | `1`          |
| request   | `farming`    |

### Beispiel

`https://api.hyperjo.de/?version=1&request=farming`

### Rückgabe

```json
{
  "farming": [
    {
      "itemName": "Mehl",
      "symbol": "https://static.hyperjo.de/img/items/farming/flour.png",
      "currentPrice": 168,
      "demand": 1
    },
    {
      "itemName": "Tiefgekühlte Pommes",
      "symbol": "https://static.hyperjo.de/img/items/farming/frozenfries.png",
      "currentPrice": 131,
      "demand": 0
    },
    {
      "itemName": "Glas",
      "symbol": "https://static.hyperjo.de/img/items/farming/glas.png",
      "currentPrice": 182,
      "demand": -1
    }
  ]
}
```
Aus Schönheitsgründen wird hier nicht die gesamte Rückgabe abgebildet. Natürlich werden von der API alle Farminggüter zurückgegeben.
Das Attribut `demand` ist positiv, wenn der Preis aktuell höher als Normal ist, negativ wenn der Preis aktuell nicht gut steht und 0 wenn der Preis neutral steht.

### Changelog

- Seit Version 1 verfügbar.
- Attribut `demand` hinzugefügt.
