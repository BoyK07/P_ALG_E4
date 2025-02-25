```mermaid
erDiagram
    %% USER TABLE WITH PROFILE INFO
    USER {
        int id PK
        string username "UNIQUE"
        string email "UNIQUE"
        string password
        string role
        string display_name
        text bio
        string avatar_url
        timestamp created_at
        timestamp updated_at
    }

    %% ITEM TABLE SPLIT WITH STATISTICS
    ITEM {
        int id PK
        string name
        text description
        string type
        string rarity
        timestamp created_at
        timestamp updated_at
    }

    ITEM_STATISTICS {
        int id PK
        int item_id FK
        string stat_type
        int value
    }

    MAGICAL_EFFECTS {
        int id PK
        string effect_name
        text effect_description
    }

    ITEM_MAGICAL_EFFECTS {
        int id PK
        int item_id FK
        int magical_effect_id FK
    }

    %% INVENTORY TABLE
    INVENTORY {
        int id PK
        int user_id FK
        int item_id FK
        int quantity
        timestamp created_at
        timestamp updated_at
    }

    %% TRADE SYSTEM WITH HISTORY
    TRADE {
        int id PK
        int sender_id FK
        int receiver_id FK
        string status
        timestamp created_at
        timestamp updated_at
    }

    TRADE_ITEM {
        int id PK
        int trade_id FK
        int item_id FK
        int quantity
    }

    TRADE_HISTORY {
        int id PK
        int trade_id FK
        string action
        timestamp timestamp
    }

    %% NOTIFICATIONS SYSTEM WITH TYPES
    NOTIFICATION {
        int id PK
        int user_id FK
        string type
        text message
        boolean read
        timestamp created_at
    }

    %% ADMIN SYSTEM WITH LOGGING
    ADMIN_ACTION {
        int id PK
        int admin_id FK
        string action_type
        text details
        timestamp created_at
    }

    %% RELATIONSHIPS
    USER ||--o{ INVENTORY : owns
    ITEM ||--o{ INVENTORY : stored_in
    USER ||--o{ TRADE : participates_in
    USER ||--o{ NOTIFICATION : receives
    USER ||--o{ ADMIN_ACTION : performs
    USER ||--o{ TRADE : can_initiate
    TRADE ||--o{ TRADE_ITEM : contains
    ITEM ||--o{ TRADE_ITEM : exchanged_in
    ITEM ||--o{ ITEM_STATISTICS : has_stats
    ITEM ||--o{ ITEM_MAGICAL_EFFECTS : has_effects
    MAGICAL_EFFECTS ||--o{ ITEM_MAGICAL_EFFECTS : applies_to
    TRADE ||--o{ TRADE_HISTORY : recorded_in