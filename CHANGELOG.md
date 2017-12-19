CHANGELOG
=========

3.0.5
- Validates item keys
- Type casts item keys to string, allowing caller to pass integer

3.0.4
- Fixes Issue #1
if the unique ID is not in the container, has() bails out returning false without checking for the item keys.

3.0.3
- Added `store` method
- Added "dot" notation capability

3.0.2
- Standardized `src` architecture
- Standardized tests architecture
- Standardized `phpcs.xml.dist`
- Standardized `phpunit.xml.dist`

3.0.1
- Changed license to MIT.
- Added TravisCI.

3.0.0
- initial release