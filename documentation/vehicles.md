## Fahrzeuge

Mit dieser Funktion können alle Fahrzeuge eines Charakters abgefragt werden. Es kann jedoch nur abgefragt werden, welchen Fahrzeugtyp, mit welchem Kennzeichen der Charakter besitzt. Zerstörte Fahrzeuge werden nicht angezeigt.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `vehicles` benötigt. |
| version | `1` |
| request | `vehicles` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=vehicles&key=[KEY]`

### Rückgabe

```json
{
  "characterId": 2,
  "vehicles": [
    {
      "displayName": "Emperor (alt)", // Fahrzeugname
      "categoryName": "Kompaktwagen", // Fahrzeugkategorie
      "numberPlate": "AJQU3PZ7", // Kennzeichen
      "purchase": 1596716594, // Kaufdatum (in Millisekunden, siehe https://currentmillis.com/)
      "metersDriven": 33878 // Gefahrene Meter
    },
    {
      "displayName": "GBurrito",
      "categoryName": "Van",
      "numberPlate": "5APL6KV8",
      "purchase": 1596896809,
      "metersDriven": 25773
    },
    {
      "displayName": "Pariah",
      "categoryName": "Supersportwagen",
      "numberPlate": "7687PDG7",
      "purchase": 1598380128,
      "metersDriven": 122337
    },
    {
      "displayName": "Dodo",
      "categoryName": "Flugzeug",
      "numberPlate": "W5Y3VXFC",
      "purchase": 1604181536,
      "metersDriven": 165329
    }
  ]
}
```
Das Kaufdatum wird in Sekunden seit dem 01.01.1970, 00:00:00 Uhr UTC zurückgegeben. Dieses Datum kann 
in den meisten Programmiersprachen in ein für menschlichen leserliches Format konvertiert werden.

Hier ein Beispiel für PHP:
```php
echo date("d.m.Y H:i:s", 1604181536) . " Uhr";
// Ausgabe: 31.10.2020 22:58:56 Uhr
```
und für JavaScript:
```javascript
let date = new Date(1604181536*1000); // *1000, da JavaScript in Millisekunden rechnet.
console.log(date.toLocaleString())
```

### Changelog

- Seit Version 1 verfügbar.