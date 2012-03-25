<?php

namespace http {
    abstract class Object 
    {
        const EH_NORMAL = 0;
        const EH_SUPPRESS = 1;
        const EH_THROW = 2;

        protected static $defaultErrorHandling;
        protected $errorHandling;

        public function setErrorHandling($eh) {
        }
        public function getErrorHandling() {
        }
        public static function setDefaultErrorHandling($eh) {
        }
        public static function getDefaultErrorHandling() {
        }
        public function triggerError($error_type, $error_code, $error_message) {
        }
    }
}

namespace http {
    class Exception extends \Exception 
    {
        const E_UNKNOWN = 0;
        const E_RUNTIME = 1;
        const E_INVALID_PARAM = 2;
        const E_HEADER = 3;
        const E_MALFORMED_HEADERS = 4;
        const E_MESSAGE = 6;
        const E_MESSAGE_TYPE = 7;
        const E_MESSAGE_BODY = 8;
        const E_ENCODING = 9;
        const E_REQUEST = 10;
        const E_REQUEST_POOL = 11;
        const E_REQUEST_DATASHARE = 12;
        const E_REQUEST_FACTORY = 13;
        const E_REQUEST_METHOD = 5;
        const E_SOCKET = 14;
        const E_RESPONSE = 15;
        const E_URL = 16;
        const E_QUERYSTRING = 17;
        const E_COOKIE = 18;

    }
}

namespace http {
    class Cookie extends \http\Object 
    {
        const PARSE_RAW = 1;
        const SECURE = 16;
        const HTTPONLY = 32;

        public function __construct($cookie_string = NULL, $parser_flags = NULL, $allowed_extras = NULL) {
        }
        public function getCookies() {
        }
        public function setCookies($cookies = NULL) {
        }
        public function addCookies($cookies) {
        }
        public function getCookie($name) {
        }
        public function setCookie($cookie_name, $cookie_value = NULL) {
        }
        public function addCookie($cookie_name, $cookie_value = NULL) {
        }
        public function getExtras() {
        }
        public function setExtras($extras = NULL) {
        }
        public function addExtras($extras) {
        }
        public function getExtra($name) {
        }
        public function setExtra($extra_name, $extra_value = NULL) {
        }
        public function addExtra($extra_name, $extra_value = NULL) {
        }
        public function getDomain() {
        }
        public function setDomain($value = NULL) {
        }
        public function getPath() {
        }
        public function setPath($value = NULL) {
        }
        public function getExpires() {
        }
        public function setExpires($value = NULL) {
        }
        public function getFlags() {
        }
        public function setFlags($value = NULL) {
        }
        public function toArray() {
        }
        public function toString() {
        }
        public function __toString() {
        }
    }
}

namespace http\Encoding {
    abstract class Stream extends \http\Object 
    {
        const FLUSH_NONE = 0;
        const FLUSH_SYNC = 1048576;
        const FLUSH_FULL = 2097152;

        public function __construct($flags = NULL) {
        }
        public function update($data) {
        }
        public function flush() {
        }
        public function done() {
        }
        public function finish() {
        }
    }
}

namespace http\Encoding\Stream {
    class Deflate extends \http\Encoding\Stream 
    {
        const TYPE_GZIP = 16;
        const TYPE_ZLIB = 0;
        const TYPE_RAW = 32;
        const LEVEL_DEF = 0;
        const LEVEL_MIN = 1;
        const LEVEL_MAX = 9;
        const STRATEGY_DEF = 0;
        const STRATEGY_FILT = 256;
        const STRATEGY_HUFF = 512;
        const STRATEGY_RLE = 768;
        const STRATEGY_FIXED = 1024;

        public static function encode($data, $flags = NULL) {
        }
    }
}

namespace http\Encoding\Stream {
    class Inflate extends \http\Encoding\Stream 
    {
        public static function decode($data) {
        }
    }
}

namespace http\Encoding\Stream {
    class Dechunk extends \http\Encoding\Stream 
    {
        public static function decode($data, &$decoded_len = NULL) {
        }
    }
}

namespace http {
    class Header extends \http\Object implements \Serializable 
    {
        const MATCH_LOOSE = 0;
        const MATCH_CASE = 1;
        const MATCH_WORD = 16;
        const MATCH_FULL = 32;
        const MATCH_STRICT = 33;

        public $name;
        public $value;

        public function __construct($name = NULL, $value = NULL) {
        }
        public function toString() {
        }
        public function __toString() {
        }
        public function serialize() {
        }
        public function unserialize($serialized) {
        }
        public function match($value, $flags = NULL) {
        }
    }
}

namespace http {
    class Message extends \http\Object implements \Countable, \Serializable, \Iterator 
    {
        const TYPE_NONE = 0;
        const TYPE_REQUEST = 1;
        const TYPE_RESPONSE = 2;

        protected $type;
        protected $body;
        protected $requestMethod;
        protected $requestUrl;
        protected $responseStatus;
        protected $responseCode;
        protected $httpVersion;
        protected $headers;
        protected $parentMessage;

        public function __construct($message = NULL) {
        }
        public function getBody() {
        }
        public function setBody($body) {
        }
        public function getHeader($header) {
        }
        public function setHeader($header, $value = NULL) {
        }
        public function addHeader($header, $value) {
        }
        public function getHeaders() {
        }
        public function setHeaders($headers) {
        }
        public function addHeaders($headers, $append = NULL) {
        }
        public function getType() {
        }
        public function setType($type) {
        }
        public function getInfo() {
        }
        public function setInfo($http_info) {
        }
        public function getResponseCode() {
        }
        public function setResponseCode($response_code) {
        }
        public function getResponseStatus() {
        }
        public function setResponseStatus($response_status) {
        }
        public function getRequestMethod() {
        }
        public function setRequestMethod($request_method) {
        }
        public function getRequestUrl() {
        }
        public function setRequestUrl($url) {
        }
        public function getHttpVersion() {
        }
        public function setHttpVersion($http_version) {
        }
        public function getParentMessage() {
        }
        public function toString($include_parent = NULL) {
        }
        public function count() {
        }
        public function serialize() {
        }
        public function unserialize($serialized) {
        }
        public function rewind() {
        }
        public function valid() {
        }
        public function current() {
        }
        public function key() {
        }
        public function next() {
        }
        public function __toString() {
        }
        public function detach() {
        }
        public function prepend(\http\Message $message) {
        }
        public function reverse() {
        }
        public function isMultipart(&$boundary = NULL) {
        }
        public function splitMultipartBody() {
        }
    }
}

namespace http\Message {
    class Body extends \http\Object 
    {
        public function __construct($stream = NULL) {
        }
        public function __toString() {
        }
        public function toString() {
        }
        public function toStream($stream) {
        }
        public function toCallback($callback) {
        }
        public function append($string) {
        }
        public function addForm(array $fields = NULL, array $files = NULL) {
        }
        public function addPart(\http\Message $message) {
        }
        public function etag() {
        }
        public function stat($what = NULL) {
        }
    }
}

namespace http\Object {
    final class PropertyProxy 
    {
        final private function __construct() {
        }
    }
}

namespace http {
    class QueryString extends \http\Object implements \Serializable, \ArrayAccess, \IteratorAggregate 
    {
        const TYPE_BOOL = 3;
        const TYPE_INT = 1;
        const TYPE_FLOAT = 2;
        const TYPE_STRING = 6;
        const TYPE_ARRAY = 4;
        const TYPE_OBJECT = 5;

        private static $instance;
        private $queryArray;

        final public function __construct($params = NULL) {
        }
        public function toArray() {
        }
        public function toString() {
        }
        public function __toString() {
        }
        public function get($name = NULL, $type = NULL, $defval = NULL, $delete = NULL) {
        }
        public function set($params) {
        }
        public function mod($params = NULL) {
        }
        public function getBool($name, $defval = NULL, $delete = NULL) {
        }
        public function getInt($name, $defval = NULL, $delete = NULL) {
        }
        public function getFloat($name, $defval = NULL, $delete = NULL) {
        }
        public function getString($name, $defval = NULL, $delete = NULL) {
        }
        public function getArray($name, $defval = NULL, $delete = NULL) {
        }
        public function getObject($name, $defval = NULL, $delete = NULL) {
        }
        public function getIterator() {
        }
        public static function getGlobalInstance() {
        }
        public function xlate($from_encoding, $to_encoding) {
        }
        public function serialize() {
        }
        public function unserialize($serialized) {
        }
        public function offsetGet($offset) {
        }
        public function offsetSet($offset, $value) {
        }
        public function offsetExists($offset) {
        }
        public function offsetUnset($offset) {
        }
    }
}

namespace http\Client {
    interface HttpClient
    {
        public function createPool(\http\Request $request1 = NULL, \http\Request $request2 = NULL, \http\Request $requestN = NULL);
        public function createDataShare(\http\Request $request1 = NULL, \http\Request $request2 = NULL, \http\Request $requestN = NULL);
        public function getDriver();
        /**
         * @param \http\Request $request
         * @return \http\Message
         */
        public function send(\http\Request $request);
    }

    function http_client_get_available_drivers();
}

namespace http {
    class Request extends \http\Object implements \SplSubject 
    {
        private $observers;
        private $options;
        private $transferInfo;
        private $responseMessage;
        private $responseCode;
        private $responseStatus;
        private $requestMessage;
        private $method;
        private $url;
        private $contentType;
        private $requestBody;
        private $queryData;
        private $history;
        public $recordHistory;
        private $messageClass;

        private function __construct() {
        }
        public function getObservers() {
        }
        public function notify() {
        }
        public function attach(\SplObserver $observer) {
        }
        public function detach(\SplObserver $observer) {
        }
        public function getProgress() {
        }
        public function getTransferInfo($name = NULL) {
        }
        public function setOptions($options = NULL) {
        }
        public function getOptions() {
        }
        public function setSslOptions($ssl_options = NULL) {
        }
        public function getSslOptions() {
        }
        public function addSslOptions($ssl_optins = NULL) {
        }
        public function addHeaders($headers) {
        }
        public function getHeaders() {
        }
        public function setHeaders($headers = NULL) {
        }
        public function addCookies($cookies) {
        }
        public function getCookies() {
        }
        public function setCookies($cookies = NULL) {
        }
        public function enableCookies() {
        }
        public function resetCookies($session_only = NULL) {
        }
        public function flushCookies() {
        }
        public function setMethod($request_method) {
        }
        public function getMethod() {
        }
        public function setUrl($url) {
        }
        public function getUrl() {
        }
        public function setContentType($content_type) {
        }
        public function getContentType() {
        }
        public function setQueryData($query_data = NULL) {
        }
        public function getQueryData() {
        }
        public function addQueryData($query_data) {
        }
        public function setBody(\http\Message\Body $body) {
        }
        public function getBody() {
        }
        public function addBody(\http\Message\Body $body) {
        }
        public function getRequestMessage() {
        }
        public function getHistory() {
        }
        public function clearHistory() {
        }
        public function getMessageClass() {
        }
        public function setMessageClass($message_class_name) {
        }
    }
}

namespace http {
    class CURL 
    {
        const HTTP_VERSION_1_0 = 1;
        const HTTP_VERSION_1_1 = 2;
        const HTTP_VERSION_NONE = 0;
        const HTTP_VERSION_ANY = 0;
        const SSL_VERSION_TLSv1 = 1;
        const SSL_VERSION_SSLv2 = 2;
        const SSL_VERSION_SSLv3 = 3;
        const SSL_VERSION_ANY = 0;
        const IPRESOLVE_V4 = 1;
        const IPRESOLVE_V6 = 2;
        const IPRESOLVE_ANY = 0;
        const AUTH_BASIC = 1;
        const AUTH_DIGEST = 2;
        const AUTH_DIGEST_IE = 16;
        const AUTH_NTLM = 8;
        const AUTH_GSSNEG = 4;
        const AUTH_ANY = -17;
        const PROXY_SOCKS4 = 4;
        const PROXY_SOCKS4A = 5;
        const PROXY_SOCKS5_HOSTNAME = 5;
        const PROXY_SOCKS5 = 5;
        const PROXY_HTTP = 0;
        const PROXY_HTTP_1_0 = 1;
        const POSTREDIR_301 = 1;
        const POSTREDIR_302 = 2;
        const POSTREDIR_ALL = 3;

        private function __construct() {
        }
    }
}

namespace http\Request {
    class DataShare extends \http\Object implements \Countable 
    {
        public $cookie;
        public $dns;
        public $ssl;

        private function __construct() {
        }
        public function __destruct() {
        }
        public function count() {
        }
        public function attach(\http\Request $request) {
        }
        public function detach(\http\Request $request) {
        }
        public function reset() {
        }
    }
}

namespace http\Request {
    class Pool extends \http\Object implements \Countable, \Iterator 
    {
        private function __construct() {
        }
        public function __destruct() {
        }
        public function attach(\http\Request $request) {
        }
        public function detach(\http\Request $request) {
        }
        public function send() {
        }
        public function reset() {
        }
        protected function once() {
        }
        protected function wait($timeout = NULL) {
        }
        public function valid() {
        }
        public function current() {
        }
        public function key() {
        }
        public function next() {
        }
        public function rewind() {
        }
        public function count() {
        }
        public function getAttachedRequests() {
        }
        public function getFinishedRequests() {
        }
        public function enablePipelining($enable = NULL) {
        }
        public function enableEvents($enable = NULL) {
        }
    }
}

namespace http {
    class Url extends \http\Object 
    {
        const REPLACE = 0;
        const JOIN_PATH = 1;
        const JOIN_QUERY = 2;
        const STRIP_USER = 4;
        const STRIP_PASS = 8;
        const STRIP_AUTH = 12;
        const STRIP_PORT = 32;
        const STRIP_PATH = 64;
        const STRIP_QUERY = 128;
        const STRIP_FRAGMENT = 256;
        const STRIP_ALL = 492;
        const FROM_ENV = 4096;

        public $scheme;
        public $user;
        public $pass;
        public $host;
        public $port;
        public $path;
        public $query;
        public $fragment;

        public function __construct($old_url = NULL, $new_url = NULL, $flags = NULL) {
        }
        public function mod($more_url_parts, $flags = NULL) {
        }
        public function toString() {
        }
        public function __toString() {
        }
        public function toArray() {
        }
    }
}

namespace http {
    class Env 
    {
        public static function getRequestHeader($header_name = NULL) {
        }
        public static function getRequestBody($body_class_name = NULL) {
        }
        public static function getResponseStatusForCode($code) {
        }
        public static function getResponseHeader($header_name = NULL) {
        }
        public static function getResponseCode() {
        }
        public static function setResponseHeader($header_name, $header_value = NULL, $response_code = NULL, $replace_header = NULL) {
        }
        public static function setResponseCode($code) {
        }
        public static function negotiateLanguage($supported, &$result_array = NULL) {
        }
        public static function negotiateContentType($supported, &$result_array = NULL) {
        }
        public static function negotiateEncoding($supported, &$result_array = NULL) {
        }
        public static function negotiateCharset($supported, &$result_array = NULL) {
        }
        public static function negotiate($value, $supported, $primary_type_separator = NULL, &$result_array = NULL) {
        }
        public static function statPersistentHandles() {
        }
        public static function cleanPersistentHandles($name = NULL, $ident = NULL) {
        }
    }
}

namespace http\Env {
    class Request extends \http\Message implements \Iterator, \Serializable, \Countable 
    {
        protected $query;
        protected $form;
        protected $files;

        public function __construct() {
        }
        public function getForm() {
        }
        public function getQuery() {
        }
        public function getFiles() {
        }
    }
}

namespace http\Env {
    class Response extends \http\Message implements \Iterator, \Serializable, \Countable 
    {
        const CONTENT_ENCODING_NONE = 0;
        const CONTENT_ENCODING_GZIP = 1;
        const CACHE_NO = 0;
        const CACHE_HIT = 1;
        const CACHE_MISS = 2;

        protected $contentType;
        protected $contentDisposition;
        protected $contentEncoding;
        protected $cacheControl;
        protected $etag;
        protected $lastModified;
        protected $throttleDelay;
        protected $throttleChunk;

        public function __construct() {
        }
        public function __invoke($ob_string, $ob_flags = NULL) {
        }
        public function setContentType($content_type) {
        }
        public function setContentDisposition(array $disposition_params) {
        }
        public function setContentEncoding($content_encoding) {
        }
        public function setCacheControl($cache_control) {
        }
        public function setLastModified($last_modified) {
        }
        public function isCachedByLastModified($header_name = NULL) {
        }
        public function setEtag($etag) {
        }
        public function isCachedByEtag($header_name = NULL) {
        }
        public function setThrottleRate($chunk_size, $delay = NULL) {
        }
        public function send() {
        }
    }
}

namespace http {
    class Params extends \http\Object implements \ArrayAccess 
    {
        const DEF_PARAM_SEP = ',';
        const DEF_ARG_SEP = ';';
        const DEF_VAL_SEP = '=';
        const COOKIE_PARAM_SEP = '';

        public $params;
        public $param_sep;
        public $arg_sep;
        public $val_sep;

        final public function __construct($params = NULL, $param_sep = NULL, $arg_sep = NULL, $val_sep = NULL) {
        }
        public function toArray() {
        }
        public function toString() {
        }
        public function __toString() {
        }
        public function offsetExists($name) {
        }
        public function offsetUnset($name) {
        }
        public function offsetSet($name, $value) {
        }
        public function offsetGet($name) {
        }
    }
}

