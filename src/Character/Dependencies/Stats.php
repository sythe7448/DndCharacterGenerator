<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

    class Stats
    {

        /**
         * The level of the character
         *
         * @var int
         */
        private $level;

        /**
         * The strength of the character
         *
         * @var int
         */
        private $strength;

        /**
         * The dexterity of the character
         *
         * @var int
         */
        private $dexterity;

        /**
         * The constitution of the character
         *
         * @var int
         */
        private $constitution;

        /**
         * The intelligence of the character
         *
         * @var int
         */
        private $intelligence;

        /**
         * The wisdom of the character
         *
         * @var int
         */
        private $wisdom;

        /**
         * The charisma of the character
         *
         * @var int
         */
        private $charisma;

        /**
         * @return int
         */
        public function getLevel (): int
        {
            return $this->level;
        }

        /**
         * @param int $level
         */
        public function setLevel (int $level): void
        {
            $this->level = $level;
        }

        /**
         * @return int
         */
        public function getStrength (): int
        {
            return $this->strength;
        }

        /**
         * @param int $strength
         */
        public function setStrength (int $strength): void
        {
            $this->strength = $strength;
        }

        /**
         * @return int
         */
        public function getDexterity (): int
        {
            return $this->dexterity;
        }

        /**
         * @param int $dexterity
         */
        public function setDexterity (int $dexterity): void
        {
            $this->dexterity = $dexterity;
        }

        /**
         * @return int
         */
        public function getConstitution (): int
        {
            return $this->constitution;
        }

        /**
         * @param int $constitution
         */
        public function setConstitution (int $constitution): void
        {
            $this->constitution = $constitution;
        }

        /**
         * @return int
         */
        public function getIntelligence (): int
        {
            return $this->intelligence;
        }

        /**
         * @param int $intelligence
         */
        public function setIntelligence (int $intelligence): void
        {
            $this->intelligence = $intelligence;
        }

        /**
         * @return int
         */
        public function getWisdom (): int
        {
            return $this->wisdom;
        }

        /**
         * @param int $wisdom
         */
        public function setWisdom (int $wisdom): void
        {
            $this->wisdom = $wisdom;
        }

        /**
         * @return int
         */
        public function getCharisma (): int
        {
            return $this->charisma;
        }

        /**
         * @param int $charisma
         */
        public function setCharisma (int $charisma): void
        {
            $this->charisma = $charisma;
        }

    }