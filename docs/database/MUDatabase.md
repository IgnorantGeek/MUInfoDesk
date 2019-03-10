<!--
Fix the formatting for table parameter descriptions
-->

# Memorial Union Key Checkout System Database

The MU Key Checkout Application makes use of the MariaDB database software (v 10.1.38), which is based on the MySQL relational 
database management system. To read more about this system, see the [MariaDB documentation page](https://mariadb.org/about/). All edits 
to this database must be made through the [application interface](https://devbox.memunion.iastate.edu/), for direct database access 
please contact MU Technology Services personnel.



## Database: ItemCheckout

The name of the MariaDB instance is 'ItemCheckout'. the database has 10 tables which are labeled as follows.

### Table 1: Authorized Keys

Contains the list of users that are allowed to checkout any given key. 

| Parameter | Description                                      |
| :-------: | -----------                                      |
|    UID    | University ID of the user.                       |
| listID    | ID of the key list that this user has access to. |

### Table 2: Authorized Presets

Contains the list of users that are allowed to access a given preset.

| Parameter | Description                                      |
| :-------: | -----------                                      |
|    UID    | University ID of the user.                       |
| presetID  | ID of the preset this user has access to.        |

### Table 3: Available Inventory

Contains the list of items that are available to be checked out.

| Parameter   | Description                                      |
| :---------: | -----------                                      |
| itemID      | The ID of the specified item.                    |
| Description | A short description of the item.                 |
| Quantity    | The number of items available                    |
| typeID      | The ID that identifies what type of item this is |

### Table 4: Checked Out Items

Contains the list of items that are currently checked out by a user.

| Parameter   | Description                                         |
| :---------: | ------------                                        |
| itemID      | The ID of the specified item.                       |
| UID         | University ID of the user who checked out this item.|
| timeout     | The timestamp of when this item was checked out.    |
| timein      | The timestamp for when this item has been returned. |

### Table 5: Identity

Contains the list of users that are allowed to checkout some item.

| Parameter    | Description                                         |
| :---------:  | ------------                                        |
| UID          | The University ID of the user.                      |
| name         | The name of this user.                              |
| phone_number | The contact number of this user.                    |
| shirt_size   | The shirt size of this user (if applicable)         |
| username     | The username of this user for backend login.        |
| password     | The password of this user for backend login.        |

### Table 6: Item Types

Contains the list of all item types.

| Parameter   | Description                                     |
| :---------: | -----------                                     |
| typeID      | The ID of the specified item type.              |
| Description | A short description of the item type.           |

### Table 7: Key Lists

Contains the list of all keys that can be checked out at the Information Desk.

| Parameter | Description                                      |
| :-------: | -----------                                      |
| listID    | The unique ID of the specified key list.         |
| list_name | The name of this key list.                       |
| itemID    | The key(s) associated with this key list.        |

### Table 8: List Editors

Contains the list of the users who are allowed to edit both the Authorized Keys table and the Authorized Presets table.

| Parameter | Description                                             |
| :-------: | -----------                                             |
|    UID    | University ID of the user.                              |
| listID    | ID of the key list that this user is allowed to edit.   |
| presetID  | The ID of the preset that this user is allowed to edit. |

### Table 9: Presets

Contains the list of presets for frontend checkout sessions.

| Parameter   | Description                                      |
| :---------: | -----------                                      |
| presetID    | ID of the preset this user has access to.        |
| Description | A short description of this preset.              |

### Table 10: Preset Items

Contains the list of the items that are associated with each preset.

| Parameter | Description                                          |
| :-------: | -----------                                          |
| presetID  | The ID of the preset.                                |
| itemID    | The ID of the item associated with the given preset. |
