<?php
/*
   Copyright 2013: Kaspar Bach Pedersen

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

class Helper {

    public static function disableMults(\Riak\Bucket $bucket)
    {
        $propsList = new \Riak\BucketPropertyList();
        $propsList->setAllowMult(false);
        $bucket->setPropertyList($propsList);
    }


    public static function printRiakDebugInfo()
    {
        echo "Active connections:".\Riak\PoolInfo::getNumActiveConnection().PHP_EOL;
        echo "Persisten connections:".\Riak\PoolInfo::getNumActivePersistentConnection().PHP_EOL;
        echo "Reconnects:".\Riak\PoolInfo::getNumReconnect().PHP_EOL;
    }

}