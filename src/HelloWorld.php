<?php

/**
 * This file is part of codebarn/hello-world
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
 * implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright Copyright (c) Jason Schuchert <jason@codebarn.com>
 * @license https://opensource.org/license/apache-2-0/ Apache License, Version 2.0
 */

declare(strict_types=1);

namespace Codebarn\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class HelloWorld
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
